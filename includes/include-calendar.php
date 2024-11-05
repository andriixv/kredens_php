  <section id='myModal' class="modal-calendar">
    <div class="calendar-container">
      <span class="close material-symbols-rounded">close</span>
      <div class="calendar-header">
        <p class="calendar-current-date"></p>
        <div class="calendar-navigation">
          <span id="calendar-prev" class="material-symbols-rounded">
            chevron_left
          </span>
          <span id="calendar-next" class="material-symbols-rounded">
            chevron_right
          </span>
        </div>
      </div>

      <div class="calendar-body">
        <ul class="calendar-weekdays">
          <li>Нд</li>
          <li>Пн</li>
          <li>Вт</li>
          <li>Ср</li>
          <li>Чт</li>
          <li>Пт</li>
          <li>Сб</li>
        </ul>
        <ul class="calendar-dates"></ul>
      </div>
    </div>
  </section>
  <section class="announcements-wraper">

    <div class="announcements">
      <p>01.09 відбудеться 1 подія</p>
      <p>10.09 відбудеться 2 подія</p>
      <p>11.09 відбудеться 3 подія</p>
      <p>21.09 відбудеться 4 подія</p>
    </div>

    <button id="myBtn" onclick="modal()" class="material-symbols-rounded btn"><span>Календар</span> calendar_month</button>
  </section>