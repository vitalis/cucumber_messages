# frozen_string_literal: true

# The code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/codegen/codegen.rb]
module Cucumber
  module Messages
    ##
    # Represents the SourceReference message in Cucumber's {message protocol}[https://github.com/cucumber/messages].
    ##
    #
    # *
    #  Points to a [Source](#io.cucumber.messages.Source) identified by `uri` and a
    #  [Location](#io.cucumber.messages.Location) within that file.
    ##
    class SourceReference < Message
      attr_reader :uri

      attr_reader :java_method

      attr_reader :java_stack_trace_element

      attr_reader :location

      def initialize(
        uri: nil,
        java_method: nil,
        java_stack_trace_element: nil,
        location: nil
      )
        @uri = uri
        @java_method = java_method
        @java_stack_trace_element = java_stack_trace_element
        @location = location
        super()
      end

      ##
      # Returns a new SourceReference from the given hash.
      # If the hash keys are camelCased, they are properly assigned to the
      # corresponding snake_cased attributes.
      #
      #   Cucumber::Messages::SourceReference.from_h(some_hash) # => #<Cucumber::Messages::SourceReference:0x... ...>
      ##
      def self.from_h(hash)
        return nil if hash.nil?

        new(
          uri: hash[:uri],
          java_method: JavaMethod.from_h(hash[:javaMethod]),
          java_stack_trace_element: JavaStackTraceElement.from_h(hash[:javaStackTraceElement]),
          location: Location.from_h(hash[:location])
        )
      end
    end
  end
end
