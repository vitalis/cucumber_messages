# frozen_string_literal: true

# The code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/codegen/codegen.rb]
module Cucumber
  module Messages
    ##
    # Represents the TestCaseFinished message in Cucumber's {message protocol}[https://github.com/cucumber/messages].
    ##
    ##
    class TestCaseFinished < Message
      attr_reader :test_case_started_id

      attr_reader :timestamp

      attr_reader :will_be_retried

      def initialize(
        test_case_started_id: '',
        timestamp: Timestamp.new,
        will_be_retried: false
      )
        @test_case_started_id = test_case_started_id
        @timestamp = timestamp
        @will_be_retried = will_be_retried
        super()
      end

      ##
      # Returns a new TestCaseFinished from the given hash.
      # If the hash keys are camelCased, they are properly assigned to the
      # corresponding snake_cased attributes.
      #
      #   Cucumber::Messages::TestCaseFinished.from_h(some_hash) # => #<Cucumber::Messages::TestCaseFinished:0x... ...>
      ##
      def self.from_h(hash)
        return nil if hash.nil?

        new(
          test_case_started_id: hash[:testCaseStartedId],
          timestamp: Timestamp.from_h(hash[:timestamp]),
          will_be_retried: hash[:willBeRetried]
        )
      end
    end
  end
end
