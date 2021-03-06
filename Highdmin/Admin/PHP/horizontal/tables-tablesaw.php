<?php require 'includes/header_start.php'; ?>

        <!-- Tablesaw css -->
        <link href="../plugins/tablesaw/css/tablesaw.css" rel="stylesheet" type="text/css" />

<?php require 'includes/header_end.php'; ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Tablesaw</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tablesaw</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Stack Table</h4>
                            <p class="text-muted font-14">
                                The Stack Table stacks the table headers to a two column layout with headers on the left. Resize your viewport to across the 40em (640px) breakpoint to see the change.
                            </p>

                            <table class="tablesaw m-t-20 table m-b-0" data-tablesaw-mode="stack">
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Sortable Table</h4>
                            <p class="text-muted font-14">
                                Default appearance (with optional sortable-switch)
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Swipe Table</h4>
                            <p class="text-muted font-14">
                                Your awesome text goes here.
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-mode="swipe">
                                <thead>
                                <tr>
                                    <th class="title" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Swipe Table with Mini Map</h4>
                            <p class="text-muted font-14">
                                Your awesome text goes here.
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-mode="swipe" data-tablesaw-minimap>
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Column Toggle Table</h4>
                            <p class="text-muted font-14">
                                The Column Toggle Table allows the user to select which columns they want to be visible.
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-mode="columntoggle">
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Column Toggle Table with Mini Map</h4>
                            <p class="text-muted font-14">
                                The Column Toggle Table allows the user to select which columns they want to be visible.
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-mode="columntoggle" data-tablesaw-minimap>
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Mode Switch Table</h4>
                            <p class="text-muted font-14">
                                The mode switcher allows the user to select which tablesaw view to use.
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-mode="swipe" data-tablesaw-mode-switch data-tablesaw-minimap>
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title">Bare Table</h4>
                            <p class="text-muted font-14">
                                Your awesome text goes here.
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Avatar</td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td>Titanic</td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td>The Avengers</td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td>Harry Potter and the Deathly Hallows???Part 2</td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td>Frozen</td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Iron Man 3</td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Dark of the Moon</td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>The Lord of the Rings: The Return of the King</td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Skyfall</td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td>Transformers: Age of Extinction</td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <?php require 'includes/footer_start.php'; ?>

        <!-- Tablesaw js -->
        <script src="../plugins/tablesaw/js/tablesaw.js"></script>
        <script src="../plugins/tablesaw/js/tablesaw-init.js"></script>

        <?php require 'includes/footer_end.php'; ?>