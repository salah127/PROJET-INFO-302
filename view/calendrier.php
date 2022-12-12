<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vanilla Calendar</title>
    <meta name="description" content="A simple Calendar in JS Vanilla">
    <meta name="author" content="https://github.com/marssola/vanilla-calendar">

    <link rel="stylesheet" href="css/styleCal.css">
    <link rel="stylesheet" href="css/vanilla-calendar-min.css">
    <script src="js/vanilla-calendar-min.js"></script>
</head>

<body>
    <div class="content">
        <div class="area-buttons">
            <button class="info" name="pastDates">Disable past dates</button>
            <br>
            <input class="info calTest" name="jour" type="text" value=""> 
            <!-- <button class="info" name="availableDates">Set available dates</button>
                <button class="info" name="availableWeekDays">Set available weekdays</button> -->
        </div>
        <div id="myCalendar" class="vanilla-calendar" style="margin-bottom: 20px"></div>
    </div>

    <div id="myCalendar" class="vanilla-calendar" style="margin-bottom: 20px"></div>

    <a class="cnx-sub" href="index.php?page=home">resever</a>


    <style>
    .calTest {
        border: solid 1px green;
        width: 50px;
        height: 20px;
        display: flex;
        position: absolute;
        align-items: center;
        place-content: center;
        color: blue;
    }
    </style>


    <script>
    let pastDates = true,
        availableDates = false,
        availableWeekDays = false
    let newDivTest = document.querySelector('.calTest')

    let calendar = new VanillaCalendar({
        selector: "#myCalendar",
        months: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre",
            "Octobre", "Novembre", "Decembre"
        ],
        shortWeekday: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        onSelect: (data, elem) => {
            // console.log(data, elem);
            // newDivTest.innerHTML = data.date[8] + data.date[9];
            newDivTest.setAttribute('value', data.date[8] + data.date[9]);
        }
    })

    let btnPastDates = document.querySelector('[name=pastDates]')
    btnPastDates.addEventListener('click', () => {
        pastDates = !pastDates
        calendar.set({
            pastDates: pastDates
        })
        btnPastDates.innerText = `${(pastDates ? 'Disable' : 'Enable')} past dates`
    })

    

    </script>

</body>

</html>