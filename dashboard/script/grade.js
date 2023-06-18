
    function calculateGPA() {
        var table = document.getElementById("gpa-table-body");
        var rows = table.getElementsByTagName("tr");
        var totalCreditHours = 0;
        var totalGradePoints = 0;

        for (var i = 0; i < rows.length; i++) {
            var creditHoursInput = rows[i].querySelector(".credit-hours");
            var gradeInput = rows[i].querySelector(".grade");

            var td1 = creditHoursInput.innerText;
            var creditHours = parseFloat(td1);
            var grade = gradeInput.value;
            console.log("hello" + creditHours);
            console.log("hey");
            console.log(grade);

            if (!isNaN(creditHours)) {
                totalCreditHours += creditHours;
                totalGradePoints += calculateGradePoints(grade) * creditHours;
            }
        }

        var gpa = totalGradePoints / totalCreditHours;
        console.log(gpa)
        if (isNaN(gpa) || !isFinite(gpa)) {
            document.getElementById("gpa").innerHTML = "-";
        } else {
            document.getElementById("gpa").innerHTML = gpa.toFixed(2);
        }
    }

    function calculateGradePoints(grade) {
        switch (grade) {
            case "A+":
                return 4.0;
            case "A":
                return 4.0;
            case "A-":
                return 3.7;
            case "B+":
                return 3.3;
            case "B":
                return 3.0;
            case "B-":
                return 2.7;
            case "C+":
                return 2.3;
            case "C":
                return 2.0;
            case "C-":
                return 1.7;
            case "D+":
                return 1.3;
            case "D":
                return 1.0;
            case "F":
                return 0.0;
            default:
                return 0.0;
        }
    }
