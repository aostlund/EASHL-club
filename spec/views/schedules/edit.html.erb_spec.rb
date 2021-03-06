require 'rails_helper'

RSpec.describe "schedules/edit", :type => :view do
  before(:each) do
    @schedule = assign(:schedule, Schedule.create!(
      :logo => "MyString"
    ))
  end

  it "renders the edit schedule form" do
    render

    assert_select "form[action=?][method=?]", schedule_path(@schedule), "post" do

      assert_select "input#schedule_logo[name=?]", "schedule[logo]"
    end
  end
end
