<!DOCTYPE html>
<html lang="en">
 
<head>
    <script defer src="js/script.js"></script>
    <script defer src="js/search.js"></script>
    <script defer src="js/filter.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/40ad289a3a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>UGame?</title>
</head>

<div class = "all">
    <body>
        <header>
            <div class = "slogan">
                <h6 id = "phrase"> <img class = "white_logo" src = "images/UGAME logo (white).png" width = "100" height = "25"> Discover our latest releases.</h6>
            </div>
            <div class = "top_section">
                <a class = "logo" href="index"> <img class = "logo" src = "images/UGAME logo.png" width = "200" height = "50"> </a>
                <input id = search type="text" placeholder="Search games..." name="search"> 
                <button id = "search_button" type="button">Go</button>
                <ul id=register_basket>
                    <li><a id="sign_register" href="register"> <i class="fa-solid fa-user-large"></i> Sign in or Register </a></li>
                    <li><a id="basket" href="basket"> <i class="fa-solid fa-basket-shopping"></i> Basket</a></li>
                </ul>
            </div>
            <div class="nav_bar">
                <nav>
                    <ul id=links>
                        <li><a id="playstation" href="playstation">PLAYSTATION</a></li>
                        <li><a id="xbox" href="xbox">XBOX</a></li>
                        <li><a id="nintendo" href="nintendo">NINTENDO</a></li>
                        <li><a id="nintendo" href="deals">DEALS</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class = "whole_sect">
        <div class = "filtered_search"> 
                <div class = "filtered_search_buttons">
                    <h3 id = "filter_title">Filter</h3>
                    <hr id = "filter_line" size="3" width="90%" color="black"> 
                    <select  class = filter_buttons id = filter_genre type="button">
                        <option disabled selected>Genre</option>
                        <option>+ Action Adventure</option>
                        <option>+ Platformer</option>
                        <option>+ RPG</option>
                        <option>+ Horror</option>
                        <option>+ Shooter</option>
                        <option>+ Fighting</option>
                        <option>+ Racing</option>
                        <option>+ Sport</option>
                    </select>

                    <select  class = filter_buttons type="button">
                        <option disabled selected>Price Range</option>
                        <option>£0.00 - £49.99</option>
                        <option>£50.00 - £99.99</option>
                        <option>£200.00 - £249.99</option>
                        <option>£250.00 - £299.99</option>
                    </select>

                    <select  class = filter_buttons type="button">
                        <option disabled selected>Age Rating</option>
                        <option>Age 12+</option>
                        <option>Age 16+</option>
                        <option>Age 18+</option>
                        <option>Age 7+</option>
                        <option>Age 3+</option>
                    </select>

                    <select  class = filter_buttons type="button">
                    <option disabled selected>Platform</option>
                        <option>Xbox Series X</option>
                        <option>Xbox One</option>
                    </select>
                </div>
            </div>


            <div class = "browse_games">
                <div class = "category">
                    <h6 id = "category_title"><b>Category: </b><strong>'Xbox Games'</strong></h6>
                </div>

                <div class = "sort_by_filter">
                    <label id = "sort_by_label">Sort By</label>
                    <select name="sort_by" id="sort_by">
                        <option value="best_sellers">Best Sellers</option>
                        <option value="A-Z">Product Name A-Z</option>
                        <option value="price_lth">Price Low to High</option>
                        <option value="price_htl">Price High to Low</option>
                    </select>
                </div>

                <hr id = "line" size="3" width="90%" color="black"> 

                <div class = "game_collection">
                    <div class = "game_section" id = "game1">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £49.99 </h4>
                        <h6 class = "game_name"> Elden Ring <br> Xbox Series X</h4>
                        <p id = "game_attributes">(RPG/16+)</p>
                        <button onclick="add_to_cart(game1)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game2">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £41.99 </h4>
                        <h6 class = "game_name"> Resident Evil Village <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Horror/18+)</p>
                        <button onclick="add_to_cart(game2)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game3">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £54.99 </h4>
                        <h6 class = "game_name"> Forza Horizon 5 <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Racing/3+)</p>
                        <button onclick="add_to_cart(game3)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game4">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £59.99 </h4>
                        <h6 class = "game_name"> NBA 2K23 <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Sport/3+)</p>
                        <button onclick="add_to_cart(game4)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game5">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £24.99 </h4>
                        <h6 class = "game_name"> Sonic Colours <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Platformer/7+)</p>
                        <button onclick="add_to_cart(game5)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game6">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £54.99 </h4>
                        <h6 class = "game_name"> Halo Infinite <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Shooter/16+)</p>
                        <button onclick="add_to_cart(game6)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game7">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £54.99 </h4>
                        <h6 class = "game_name"> Grand Theft Auto: The Trilogy <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Action Adventure/18+)</p>
                        <button onclick="add_to_cart(game7)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game8">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £49.99 </h4>
                        <h6 class = "game_name"> Control <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Action Adventure/16+)</p>
                        <button onclick="add_to_cart(game8)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game9">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £15.99 </h4>
                        <h6 class = "game_name"> Borderlands 3 <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Shooter/18+)</p>
                        <button onclick="add_to_cart(game9)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game10">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £27.99 </h4>
                        <h6 class = "game_name"> Life Strange True Colors <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Action Adventure/16+)</p>
                        <button onclick="add_to_cart(game10)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game11">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £44.99 </h4>
                        <h6 class = "game_name"> Soul Hackers 2 <br> Xbox Series X</h4>
                        <p id = "game_attributes">(RPG/16+)</p>
                        <button onclick="add_to_cart(game11)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game12">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £17.99 </h4>
                        <h6 class = "game_name"> Forza Motorsport 7 <br> Xbox One</h4>
                        <p id = "game_attributes">(Racing/3+)</p>
                        <button onclick="add_to_cart(game12)" class = "atb_button" type="button">Add to Basket</button>
                    </div>

                    <div class = "game_section" id = "game13">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £25.99 </h4>
                        <h6 class = "game_name"> Assassin's Creed Valhalla <br> Xbox Series X</h4>
                        <p id = "game_attributes">(Action Adventure/18+)</p>
                        <button onclick="add_to_cart(game13)" class = "atb_button" type="button">Add to Basket</button>
                    </div>
                </div>       
            </div>
            <div id = "empty_container">
                <h5 id = product_num></h5>
                <h5 id = price_total></h5>
            </div>   
        </div>
    </body>
</html>
 
