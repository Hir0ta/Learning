<!DOCTYPE html>

<html lang="">
  <head>
    <title>jQuery Editor Localization</title>
    <meta charset="utf-8" />
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!--Popper JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!--Gijgo CSS-->
    <link href="node_modules/gijgo/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!--Gijgo JS-->
    <script src="node_modules/gijgo/js/gijgo.min.js" type="text/javascript"></script>
    <!--Gijgo Languages-->
    <script src="node_modules/gijgo/js/messages/messages.fr-fr.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.bg-bg.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.de-de.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.pt-br.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.ru-ru.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.es-es.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.it-it.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.hu-hu.js" type="text/javascript"></script>
    <!--Own Code-->
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse_target">
        <a class="navbar-brand"><img src="https://img.icons8.com/metro/1600/fire-element.png" style="height:1.5rem;"></a>
        <a href="index.php" class="navbar-text">HOT</a>
        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown_target">
              Dropdown1
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="index.php?lap=link1" class="dropdown-item text-light bg-dark">Link1</a>
                <a href="index.php?lap=link2" class="dropdown-item text-light bg-dark">Link2</a>
                <a href="index.php?lap=link3" class="dropdown-item text-light bg-dark">Link3</a>
                <a href="index.php?lap=link4" class="dropdown-item text-light bg-dark">Link4</a>
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown_target">
              Dropdown2
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="index.php?lap=link1" class="dropdown-item text-light bg-dark">Link1</a>
                <a href="index.php?lap=link2" class="dropdown-item text-light bg-dark">Link2</a>
                <a href="index.php?lap=link3" class="dropdown-item text-light bg-dark">Link3</a>
                <a href="index.php?lap=link4" class="dropdown-item text-light bg-dark">Link4</a>
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link">
              Dropdown3
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link">
              Dropdown4
            </a>
          </li>

        </ul>
      </div>
    </nav>
    <div class="pegi fixed-bottom">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="index.php?lap=1">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="index.php?lap=2">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="index.php?lap=3">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      </div>
    <div class="panel">
      <?php
        //error handle
        ERROR_REPORTING (E_PARSE | E_ERROR);

        //content from the menu
        if ($_GET["lap"] == "1") include "1.php";
        if ($_GET["lap"] == "2") include "2.php";
        if ($_GET["lap"] == "3") include "3.php";
        if ($_GET["lap"] == "4") include "4.php";
      ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 yellow"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 red"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 blue"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 green"></div>
      </div>
      <br>
      <table class="table-dark table-hover table-bordered">
        <thead>
          <tr>
            <th class="table-dark">Name</th>
            <th>Town</th>
            <th>County</th>
            <th>Age</th>
            <th>Profession</th>
            <th>Anual Income</th>
            <th>Matital Status</th>
            <th>Children</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="table-dark">John Smith</td>
            <td>Macelsfield</td>
            <td>Cheshire</td>
            <td>52</td>
            <td>Brewer</td>
            <td>£47,000</td>
            <td>Married</td>
            <td>2</td>
          </tr>
          <tr>
            <td class="table-dark">Jenny Jones</td>
            <td>Threlkeld</td>
            <td>Cumbria</td>
            <td>34</td>
            <td>Shepherdess</td>
            <td>£28,000</td>
            <td>Single</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="table-dark">Peter Frampton</td>
            <td>Avebury</td>
            <td>Wiltshire</td>
            <td>57</td>
            <td>Musician</td>
            <td>£124,000</td>
            <td>Married</td>
            <td>4</td>
          </tr>
          <tr>
            <td class="table-dark">Simon King</td>
            <td>Malvern</td>
            <td>Worchestershire</td>
            <td>48</td>
            <td>Naturalist</td>
            <td>£65,000</td>
            <td>Married</td>
            <td>2</td>
          </tr>
          <tr>
            <td class="table-dark">Lucy Diamond</td>
            <td>St Albans</td>
            <td>Hertfordshire</td>
            <td>67</td>
            <td>Pharmasist</td>
            <td>Retired</td>
            <td>Married</td>
            <td>3</td>
          </tr>
          <tr>
            <td class="table-dark">Austin Stevenson</td>
            <td>Edinburgh</td>
            <td>Lothian </td>
            <td>36</td>
            <td>Vigilante</td>
            <td>£86,000</td>
            <td>Single</td>
            <td>Unknown</td>
          </tr>
          <tr>
            <td class="table-dark">Wilma Rubble</td>
            <td>Bedford</td>
            <td>Bedfordshire</td>
            <td>43</td>
            <td>Housewife</td>
            <td>N/A</td>
            <td>Married</td>
            <td>1</td>
          </tr>
          <tr>
            <td class="table-dark">Kat Dibble</td>
            <td>Manhattan</td>
            <td>New York</td>
            <td>55</td>
            <td>Policewoman</td>
            <td>$36,000</td>
            <td>Single</td>
            <td>1</td>
          </tr>
          <tr>
            <td class="table-dark">Henry Bolingbroke</td>
            <td>Bolingbroke</td>
            <td>Lincolnshire</td>
            <td>45</td>
            <td>Landowner</td>
            <td>Lots</td>
            <td>Married</td>
            <td>6</td>
          </tr>
          <tr>
            <td class="table-dark">Alan Brisingamen</td>
            <td>Alderley</td>
            <td>Cheshire</td>
            <td>352</td>
            <td>Arcanist</td>
            <td>A pile of gems</td>
            <td>Single</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>
      <br>
      <div class="calendar">
        <div class="gj-margin-top-10">
            <form class="display-inline">
              <label for="ddlLanguage">Language:</label>
              <select id="ddlLanguage">
                <option value="en-us">English</option>
                <option value="fr-fr">French</option>
                <option value="bg-bg">Bulgarian</option>
                <option value="de-de">German</option>
                <option value="pt-br">Portuguese (Brazil)</option>
                <option value="ru-ru">Russian</option>
                <option value="es-es">Spanish</option>
                <option value="it-it">Italian</option>
                <option value="hu-hu" selected="selected">Magyar</option>
              </select>
          </form>
        </div>
        <div class="gj-margin-top-10">
          <form class="display-inline">
            <label for="selectFormat">Select date format</label>
            <select id="selectFormat">
              <option value="yyyy-mm-dd">Y-m-d</option>
              <option value="yyyy mm dd">Y m d</option>
            </select>
          </form>
        </div>
        <div class="gj-margin-top-10">
          <form class="display-inline">
            <label for="selectColor">Select date format</label>
            <select id="selectColor">
              <option value="datepicker-red" selected>Red</option>
              <option value="datepicker-blue">Blue</option>
            </select>
          </form>
        </div>
        <div class="gj-clear-both"></div>
        <div class="gj-margin-top-10">
            <input id="datepicker" width="276" />
        </div>
      </div> 
      <div class="popup">
          <h2>Modal Example</h2>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
            Open modal
          </button>
          <div class="modal" id="myModal1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Modal Heading1</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  Modal body1
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Next</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal" id="myModal2">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal Heading2</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    Modal body2
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div> 
  </body>
</html>