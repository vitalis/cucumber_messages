# frozen_string_literal: true

# The code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/codegen/codegen.rb]
module Cucumber
  module Messages
    ##
    # Represents the Hook message in Cucumber's {message protocol}[https://github.com/cucumber/messages].
    ##
    ##
    class Hook < Message
      attr_reader :id

      attr_reader :name

      attr_reader :source_reference

      attr_reader :tag_expression

      def initialize(
        id: '',
        name: nil,
        source_reference: SourceReference.new,
        tag_expression: nil
      )
        @id = id
        @name = name
        @source_reference = source_reference
        @tag_expression = tag_expression
        super()
      end

      ##
      # Returns a new Hook from the given hash.
      # If the hash keys are camelCased, they are properly assigned to the
      # corresponding snake_cased attributes.
      #
      #   Cucumber::Messages::Hook.from_h(some_hash) # => #<Cucumber::Messages::Hook:0x... ...>
      ##
      def self.from_h(hash)
        return nil if hash.nil?

        new(
          id: hash[:id],
          name: hash[:name],
          source_reference: SourceReference.from_h(hash[:sourceReference]),
          tag_expression: hash[:tagExpression]
        )
      end
    end
  end
end
