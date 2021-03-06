# Handles news-posts and prepares them for custom news display
class Post < ActiveRecord::Base
  has_many :comments
  require 'nokogiri'

  def self.news
    news = []
    last(20).reverse.each do |post|
      news.push split_image_and_text(post)
    end
    news
  end

  def self.split_image_and_text(post)
    {
      title: post.title,
      image: extract_images(post),
      youtube: extract_iframe(post),
      text: extract_text(post, extract_images(post), extract_iframe(post)),
      id: post.id
    }
  end

  def self.extract_images(post)
    Nokogiri::HTML(post.text).css('img').map { |i| i['src'] }
  end

  def self.extract_iframe(post)
    Nokogiri::HTML(post.text).css('iframe').map { |i| i['src'] }
  end

  def self.extract_text(post, images, youtube)
    text = Nokogiri::HTML(post.text)
    if images[0]
      text.at_xpath("//img[@src='#{images[0]}']").remove
    end
    if youtube[0]
      text.at_xpath("//iframe[@src='#{youtube[0]}']").remove
    end
    text.to_html
  end
end
