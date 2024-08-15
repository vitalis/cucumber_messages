# frozen_string_literal: true

# The code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/codegen/codegen.rb]
module Cucumber
  module Messages
    ##
    # Represents the TestStepFinished message in Cucumber's {message protocol}[https://github.com/cucumber/messages].
    ##
    ##
    class TestStepFinished < Message
      attr_reader :test_case_started_id

      attr_reader :test_step_id

      attr_reader :test_step_result

      attr_reader :timestamp

      def initialize(
        test_case_started_id: '',
        test_step_id: '',
        test_step_result: TestStepResult.new,
        timestamp: Timestamp.new
      )
        @test_case_started_id = test_case_started_id
        @test_step_id = test_step_id
        @test_step_result = test_step_result
        @timestamp = timestamp
        super()
      end

      ##
      # Returns a new TestStepFinished from the given hash.
      # If the hash keys are camelCased, they are properly assigned to the
      # corresponding snake_cased attributes.
      #
      #   Cucumber::Messages::TestStepFinished.from_h(some_hash) # => #<Cucumber::Messages::TestStepFinished:0x... ...>
      ##
      def self.from_h(hash)
        return nil if hash.nil?

        new(
          test_case_started_id: hash[:testCaseStartedId],
          test_step_id: hash[:testStepId],
          test_step_result: TestStepResult.from_h(hash[:testStepResult]),
          timestamp: Timestamp.from_h(hash[:timestamp])
        )
      end
    end
  end
end
