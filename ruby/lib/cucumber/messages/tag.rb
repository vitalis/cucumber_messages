# frozen_string_literal: true

# The code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/jsonschema/scripts/codegen.rb]
module Cucumber
  module Messages
    ##
    # Represents the Tag message in Cucumber's {message protocol}[https://github.com/cucumber/messages].
    ##
    #
    # *
    #  A tag
    ##
    class Tag < Message
      ##
      # Location of the tag
      ##
      attr_reader :location

      ##
      # The name of the tag (including the leading `@`)
      ##
      attr_reader :name

      ##
      # Unique ID to be able to reference the Tag from PickleTag
      ##
      attr_reader :id

      def initialize(
        location: Location.new,
        name: '',
        id: ''
      )
        @location = location
        @name = name
        @id = id
        super()
      end

      ##
      # Returns a new Tag from the given hash.
      # If the hash keys are camelCased, they are properly assigned to the
      # corresponding snake_cased attributes.
      #
      #   Cucumber::Messages::Tag.from_h(some_hash) # => #<Cucumber::Messages::Tag:0x... ...>
      ##
      def self.from_h(hash)
        return nil if hash.nil?

        new(
          location: Location.from_h(hash[:location]),
          name: hash[:name],
          id: hash[:id]
        )
      end
    end
  end
end