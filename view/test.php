<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="css/vanilla-calendar-min.css">
    <script src="js/vanilla-calendar-min.js"></script>
</head>




<input class="info calTest" style="color:yellow; width:50%; " name="jour" type="text">;

<?php 
// $_SESSION['date_reservation']  ;

?>

<body>
    <div class="content">
        <div id="myCalendar" class="vanilla-calendar" style="margin-bottom: 20px"></div>
    </div>


    <input type="hidden" name="date_reservation" value="">

    <button type="button" onclick="sendData({test:'ok'})">Cliquez ici !</button>
    <a id="dd" href="index.php?page=valid-res">reserver</a>


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
    let newDivTest = document.querySelector('.calTest')
    let dd = document.querySelector('#dd')
    let jour = document.querySelector('input[name=jour]')

    var valeur = document.querySelector('input[name=date_reservation]')


    let calendar = new VanillaCalendar({
        selector: "#myCalendar",
        months: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre",
            "Octobre", "Novembre", "Decembre"
        ],
        shortWeekday: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        onSelect: (data, elem) => {
            newDivTest.setAttribute('value', data.date[11] + data.date[12] + data.date[13] + data.date[14] +
                '-12-' + data.date[8] + data.date[9]
            );
            valeur = valeur.setAttribute('value', data.date[11] + data.date[12] + data.date[13] + data.date[
                14] + '-12-' + data.date[8] + data.date[9]);

            dd.innerHTML = jour.value
            reserver('4', '2', valeur)

    }
            // document.location.href="index.php?page=valid-res";

    })








    
    </script>

</body>

</html>