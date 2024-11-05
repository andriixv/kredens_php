<?php include 'includes/include-head.php';?>
<section class="book-catalog">
  <section class="filter-wrapper">
    <div class="add-filters">
      <span onclick="showFilters()" class="material-symbols-rounded filter-button"> filter_alt</span>
      <a href="add_book.php" class="filter-button"><span class="material-symbols-rounded">add </span>Книга</a>
      <span class="book-view filter-button">
        <input type="checkbox" onchange="booksGrid()"/>
        <i id="viewIcon" class="fa-regular fa-eye"></i>
      </span>
      <div class="selected-categories-container">
        <!-- <h2>Selected Categories</h2> -->
        <div class="selected-categories"></div>
      </div>
      
    </div>

    <div class="filter-container">
      <form class="filters">
        <h5>Жанр книги</h5>
        <label><input type="checkbox" class="filter-checkbox" name="vehicle1" value="Фантастика" />
        Фантастика</label><br />

        <label><input type="checkbox" class="filter-checkbox" name="vehicle1" value="Поезія" />
        Поезія</label><br />

        <label><input type="checkbox" class="filter-checkbox" name="vehicle1" value="Проза" />
        Проза</label><br />

        <label><input type="checkbox" class="filter-checkbox" name="vehicle1" value="Детектив" />
        Детектив</label><br />

        <h5><br>Автор</h5>
        <label><input type="checkbox" class="filter-checkbox" value="Тарас Шевченко" />
        Тарас Шевченко</label><br />

        <label><input type="checkbox" class="filter-checkbox" value="Іван Франко" />
        Іван Франко</label><br />

        <label><input type="checkbox" class="filter-checkbox" value="Леся Українка" />
        Леся Українка</label><br />

        <h5><br>Серія</h5>
        <label><input type="checkbox" class="filter-checkbox" value="Класика" />
        Класика Української літератури</label><br />

        <label><input type="checkbox" class="filter-checkbox" value="Майстри детективу" />
        Майстри детективу</label><br />

        <label><input type="checkbox" class="filter-checkbox" value="Поезія для душі" />
        Поезія для душі</label><br />

        <h5><br>Рік видання</h5>
        <label><input type="checkbox" class="filter-checkbox" name="year" value="1992" />
        1992</label>

        <label><input type="checkbox" class="filter-checkbox" name="year" value="2001" />
        2001</label>

        <label><input type="checkbox" class="filter-checkbox" name="year" value="2012" />
        2012</label>

        <h5><br>Мова</h5>
        <label><input type="checkbox" class="filter-checkbox" name="language" value="Українська" />
        Українська</label>

        <label><input type="checkbox" class="filter-checkbox" name="language" value="Англійська" />
        Англійська</label>

        <label><input type="checkbox" class="filter-checkbox" name="language" value="Німецька" />
        Німецька</label>

        <h5><br>Палітурка</h5>
        <label><input type="checkbox" class="filter-checkbox" name="paperback" value="Тверда" />
        Тверда</label><br />

        <label><input type="checkbox" class="filter-checkbox" name="paperback" value="М'яка" />
        М'яка</label><br />

        <label><input type="checkbox" class="filter-checkbox" name="paperback" value="Суперобкладинка" />
        Суперобкладинка</label><br />
      </form>
    </div>
  </section>

  <section class="books">
   
      <div class="book card">
        <img class="cover" src='img/gibson_nejromant.webp'></img>
        <div class="book-info">
          <p class="title"><h1>Нейромант</h1></p>
          <p class="author">Вільям Гібсон</p>
          <p class="year">2022</p>
          <p class="genre">Наукова фантастика</p>
          <p class="language">Українська</p>
          <p class="publisher">Видавництво "Видавництво"</p>
          <p class="isbn">978-617-664-240-4</p>
          <a class="btn more" href="book-page.html">Детальніше</a>
        </div>

      </div>
      <div class="book card">
        <img class="cover" src='img/silmarilion.webp'></img>
        <div class="book-info">
          <p class="title"><h1>Сильмариліон</h1></p>
          <p class="author">Джон Рональд Руел Толкін</p>
          <p class="year">2021</p>
          <p class="genre">Фентезі</p>
          <p class="language">Українська</p>
          <p class="publisher">Астролябія</p>
          <p class="isbn">978-617-664-240-4</p>
          <a class="btn more" href="">Детальніше</a>
        </div>
      </div>
      <div class="book card"></div>
      <div class="book card"></div>
      <div class="book card"></div>
 
  </section>
</section>
<?php include 'includes/include-footer.php';?> 