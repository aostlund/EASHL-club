# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20140502144359) do

  create_table "game_players", :force => true do |t|
    t.integer "match_id"
    t.string  "glga"
    t.string  "glsavepct"
    t.string  "glsaves"
    t.string  "glshots"
    t.string  "position"
    t.string  "skassists"
    t.string  "skfow"
    t.string  "skgiveaways"
    t.string  "skgoals"
    t.string  "skhits"
    t.string  "skpim"
    t.string  "skplusmin"
    t.string  "skpoints"
    t.string  "skshots"
    t.string  "sktakeaways"
    t.string  "personaName"
    t.string  "team"
    t.string  "blazeId"
  end

  create_table "game_teams", :force => true do |t|
    t.integer "match_id"
    t.string  "teamId"
    t.string  "memberstring"
    t.string  "score"
    t.string  "winnerByDnf"
    t.string  "goals"
    t.string  "goalsAgainst"
    t.string  "name"
    t.string  "clubId"
  end

  create_table "matches", :force => true do |t|
    t.string  "matchId"
    t.integer "timestamp"
  end

  create_table "medias", :force => true do |t|
    t.string   "title"
    t.text     "text"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "onlines", :force => true do |t|
    t.string   "status"
    t.string   "image"
    t.string   "name"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "text"
  end

  create_table "players", :force => true do |t|
    t.string   "name"
    t.integer  "matches"
    t.integer  "goals"
    t.integer  "assists"
    t.integer  "points"
    t.integer  "hits"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "RealName"
    t.string   "City"
    t.integer  "number"
    t.integer  "weight"
    t.integer  "age"
    t.float    "height"
    t.string   "position"
    t.string   "type"
    t.string   "strength"
    t.string   "style"
    t.string   "typ"
    t.string   "eaid"
  end

  create_table "posts", :force => true do |t|
    t.string   "title"
    t.text     "text"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

end
