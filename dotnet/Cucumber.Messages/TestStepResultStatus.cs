using System;
using System.ComponentModel;

namespace io.cucumber.messages.types;

// Generated code
public enum TestStepResultStatus {

    [Description("UNKNOWN")]
    UNKNOWN,

    [Description("PASSED")]
    PASSED,

    [Description("SKIPPED")]
    SKIPPED,

    [Description("PENDING")]
    PENDING,

    [Description("UNDEFINED")]
    UNDEFINED,

    [Description("AMBIGUOUS")]
    AMBIGUOUS,

    [Description("FAILED")]
    FAILED;
    public static string Value(TestStepResultStatus v) {
        var attribute = v.GetType().GetField(v.ToString()).GetCustomAttribute<DescriptionAttribute>();
        return attribute == null ? v.ToString() : attribute.Description; 
    }
}
