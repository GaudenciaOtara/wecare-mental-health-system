<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>

    <link rel="stylesheet" href="css/calender.css">
</head>
<body>
    <div class="calender">
        <div class="buttons">
            <button class="button">Add Event</button> &nbsp; &ensp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <button class="button">Year</button> 
            <button class="button">Month</button><br>
        </div>
        <div class="headers">
            <input type="text" placeholder="Event Title"><br>
        </div>
         <div class="calendercontent">
        <textarea name="" id="" cols="30" rows="10" placeholder="Event Description"></textarea>

        <div class="calendar">
<div class="calendar-header">
    <span class="month-picker" id="month-picker">March</span>
    <div class="year-picker">
        <span class="year-change" id="prev-year">
            <pre><</pre>
        </span>
        <span id="year">2022</span>
        <span class="year-change" id="next-year">
            <pre>></pre>
        </span>
    </div>
</div>

<div class="calendar-body">
<div class="calendar-week-day">
    <div>Sun</div>
    <div>Mon</div>
    <div>Tue</div>
    <div>Wed</div>
    <div>Thu</div>
    <div>Fri</div>
    <div>Sat</div>
   
</div>
<div class="calendar-days"></div>
</div>

<div class="month-list"></div>
</div>


        
         </div>
    </div>
<br>
<button class="button">CREATE </button>

<script src="css/calender.js"></script>
</body>
</html>