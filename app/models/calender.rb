class Calender < ActiveRecord::Base
	require 'rubygems'
	require 'nokogiri'
	require 'rest_client'
	require 'open-uri'

	def self.hopen(url)
		begin
		  open(url)
		rescue URI::InvalidURIError
			puts'failed'
		  host = url.match(".+\:\/\/([^\/]+)")[1]
		  path = url.partition(host)[2] || "/"
		  Net::HTTP.get host, path
		end
	end

	def self.getPage
		

		#url = hopen("http://ehl_xbox.consolehockey.com/ajax/raspisanie/monthes/")
		url = 'http://ehl_xbox.consolehockey.com/ajax/raspisanie/month/'

		if page = RestClient.post(url, {'tournament_id' => 153, 'monthes' => 0, 'security_ls_key' => '638e427ad25439c05c35844b77f10c12', 'ALTO_AJAX' => 0}, {:user_agent => 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/20100101 Firefox/15.0.1', :cookies => {'_ga' => 'GA1.2.1165960130.1384607860', 'user_key' => '0x%3A1f5393e90bc60d6daee23404c75d6389', 'PHPSESSID' => 'ba740cd7i7jrthokif8k1e4bt5', 'visitor_id' => 'b9fb462abf271d1a737922f464a01cc4
'}})
			puts 'Success finding calendar'
			File.open("calendar.html", 'w'){|f| f.write page}

			npage = Nokogiri::HTML(page)
			puts npage
		end
	end
end
