<style>
    * {
    box-sizing: border-box;
    font-family: "Quicksand", sans-serif;
  }
  
  html {
    font-size: 62.5%;
    
  }
  .day{
    
    /* flex-wrap :wrap; */
    width: 1000px;
  }

  <?php for ($i = 1; $i <= 7; $i++) {$_SESSION["date$i'"]=$_POST["date$i"] ;} ?>

</style>
<fieldset  >
    <legend class='titleliste'>
        <h2><?php echo $_SESSION['id_salle'] ; ?></h2>
    </legend>
    <div  class='batima bat' >
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="css\style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
 
    <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        
        <div class="weekdays">
        <div>Temp</div>
          
          <div>LUN</div>
          <div>MAR</div>
          <div>MER</div>
          <div>JEU</div>
          <div>VEN</div>
          <div>SAM</div>
          <div>DIM</div>
        </div>
        
        <div class="day">
        <div class="days">
        </div>
        </div>
        </div>
        <p id="demo"></p>

        
      
    </div>
      
    </div>

    <script src="script.js"></script>
</div>
</fieldset >

<script>
const date = new Date();

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  document.querySelector(".date p").innerHTML = new Date().toDateString();



  let days = "";
  
//   for (let j = 9; j <= 19; j++) {
//     days += '<td class="time">h00 </td>';
  for (let i = 1; i <= 6; i++) {
    days +='<input style="z-index:-0;"type="txt" id="date" name="date" value="<?php echo date('H:m'); ?>">';  
    for (let j = 1; j <= 7; j++) {
      if(j===1 || j===8|| j===15|| j===22|| j===29|| j===36){
        days += ' <form class="time"> Adresse  </form> ';
    }
    
    days += '<a  href="index.php?page=valid-res"><div>('+j+' : '+i+')</div></a>';

}

}
days +='<input style="z-index:-0; width="10%"; "type="txt""type="txt" id="date" name="date" value="<?php echo date(' H:m'); ?>">'; 

    monthDays.innerHTML = days;

};



document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();
</script>