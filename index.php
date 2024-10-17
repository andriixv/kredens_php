<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'include-head.php';?>
</head>
<body>
    <?php include 'include-navbar.php';?>
    <?php include 'include-calendar.php';?>
    <section class="past-events">
      <div class="container">
        <div class="section-header">
          <h1><i class="fas fa-newspaper"></i> Події, які відбулися</h1>
          <label class="view-selector">
            <input type="checkbox" id="view-selector"/>
            <i id="viewIcon" class="fas fa-list"></i>
          </label>
        </div>
        <div class="events-wraper">
          <div class="event card">
            <img class="event-image" src="img/img-1.jpg" alt="" />

            <h3 class="event-header">Свято Покрови Пресвятої Богородиці</h3>
            <p class="description">
              Свято Покрови Пресвятої Богородиці у місті Горохів завжди
            відзначається з особливою урочистістю та шанобливістю, оскільки воно
            має глибокі духовні і патріотичні корені. Покрова є не лише
            релігійним святом, а й символом захисту українського народу, його
            віри та боротьби за свободу.
            </p>
            <a class="btn more" href="entry_page.php">Детальніше</a>
          </div>
          <div class="event card">
            <img class="event-image" src="img/img-2.jpg" alt="" />
            <h3 class="event-header">Фестиваль пончиків у Світязі</h3>
            <p class="description">
              Фестиваль пончиків у Світязі — це не просто смачне частування, а й чудова можливість провести час з родиною та
            друзями, насолодитися природою та культурними традиціями Волині.
            </p>
            <a class="btn more" href="entry_page2.php">Детальніше</a>
          </div>
          <div class="event card">
            <img class="event-image" src="img/img-3.jpg" alt="" />
            <h3 class="event-header">Lorem ipsum dolor sit amet.</h3>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
              quaerat repellendus nesciunt. Ea ex modi consequuntur soluta magni
              ratione, eum quibusdam vero dolore commodi incidunt voluptate
              necessitatibus et maxime sequi?
            </p>
            <a class="btn more" href="">Детальніше</a>
          </div>
          <div class="event card">
            <img class="event-image" src="img/img-4.jpg" alt="" />
            <h3 class="event-header">Lorem ipsum dolor sit amet.</h3>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
              quaerat repellendus nesciunt. Ea ex modi consequuntur soluta magni
              ratione, eum quibusdam vero dolore commodi incidunt voluptate
              necessitatibus et maxime sequi?
            </p>
            <a class="btn more" href="">Детальніше</a>
          </div>
          <div class="event card">
            <img class="event-image" src="img/img-5.jpg" alt="" />
            <h3 class="event-header">Lorem ipsum dolor sit amet.</h3>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
              quaerat repellendus nesciunt. Ea ex modi consequuntur soluta magni
              ratione, eum quibusdam vero dolore commodi incidunt voluptate
              necessitatibus et maxime sequi?
            </p>
            <a class="btn more" href="">Детальніше</a>
          </div>
          <div class="event card">
            <img class="event-image" src="img/img-6.jpg" alt="" />
            <h3 class="event-header">Lorem ipsum dolor sit amet.</h3>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
              quaerat repellendus nesciunt. Ea ex modi consequuntur soluta magni
              ratione, eum quibusdam vero dolore commodi incidunt voluptate
              necessitatibus et maxime sequi?
            </p>
            <a class="btn more" href="">Детальніше</a>
          </div>
        </div>
      </div>
    </section>
    <?php include 'include-poll.php';?>
    <?php include 'include-footer.php';?>
    <script src="index.js"></script>
</body>
</html>