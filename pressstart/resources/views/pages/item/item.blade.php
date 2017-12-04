@extends ('layout.master')

@section('content')

<!-- ROW THAT WILL CONTAIN 4 GAMEBOX ITEMS -->
<div class="row">

  <!-- 3 wide container holding the contents of the gamebox added the style cuz im lazy -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">

    <!-- the actual cardbox -->
    <div class="card ">
      <!-- this is what pops up as the user hovers over the item -->
      <a href="./itemview">  <a href="./itemView.php"> <div class='moreInfo'><p class="info">More Info</p></div></a></a>
      <!-- div that Contains the img -->
      <div class="gameArt">
        <!-- status of the stock if there out itll pop up -->
        <div class='statusDiv statusOutOfStock'>Out of Stock</div>
        <!-- actual image containing the game art stored -->
        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/732794/3max.jpg" alt="Game Art">

      </div>

      <!-- GAME INFO OVERVIEW -->
      <p class="card-title"> Overwatch </p>
      <p class="card-system">Xbox One </p>
      <p class="card-price"> $69.99</p>

    </div> <!-- END OF CARD DIV -->
  </div>   <!-- END OF COL DIV -->


  <!-- 3 wide container holding the contents of the gamebox -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
    <!-- the actual cardbox -->
    <div class="card ">
      <a href="./itemview"> <div class='moreInfo'><p class="info">More Info</p></div></a>
      <!-- Contains the img -->
      <div class="gameArt">
        <div class='statusDiv statusNew'>New</div>
        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/731029/3max.jpg" alt="Game Art">

      </div>


      <p class="card-title">
        Overwatch
      </p>
      <p class="card-system">
        Xbox One
      </p>
      <p class="card-price">
        $69.99
      </p>
    </div>
  </div>

  <!-- 3 wide container holding the contents of the gamebox -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
    <!-- the actual cardbox -->
    <div class="card ">
      <a href="./itemview"> <div class='moreInfo'><p class="info">More Info</p></div></a>
      <!-- Contains the img -->
      <div class="gameArt">
        <div class='statusDiv statusRecycled'>Recycled</div>
        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/732794/3max.jpg" alt="Game Art">

      </div>


      <p class="card-title">
        Overwatch
      </p>
      <p class="card-system">
        Xbox One
      </p>
      <p class="card-price">
        $69.99
      </p>
    </div>
  </div>
  <!-- 3 wide container holding the contents of the gamebox -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
    <!-- the actual cardbox -->
    <div class="card ">
      <a href="./itemview"> <div class='moreInfo'><p class="info">More Info</p></div></a>
      <!-- Contains the img -->
      <div class="gameArt">

        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/732794/3max.jpg" alt="Game Art">

      </div>


      <p class="card-title">
        Overwatch
      </p>
      <p class="card-system">
        Xbox One
      </p>
      <p class="card-price">
        $69.99
      </p>
    </div>
  </div>
</div>

<div class="row">

  <!-- 3 wide container holding the contents of the gamebox -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
    <!-- the actual cardbox -->
    <div class="card ">
      <a href="./itemview"> <div class='moreInfo'><p class="info">More Info</p></div></a>
      <!-- Contains the img -->
      <div class="gameArt">
        <div class='statusDiv statusOutOfStock'>Out of Stock</div>
        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/717423/2med.jpg" alt="Game Art">

      </div>


      <p class="card-title">
        Overwatch
      </p>
      <p class="card-system">
        Xbox One
      </p>
      <p class="card-price">
        $69.99
      </p>
    </div>
  </div>
  <!-- 3 wide container holding the contents of the gamebox -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
    <!-- the actual cardbox -->
    <div class="card ">
      <a href="./itemview"> <div class='moreInfo'><p class="info">More Info</p></div></a>
      <!-- Contains the img -->
      <div class="gameArt">
        <div class='statusDiv statusNew'>New</div>
        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/734015/2med.jpg" alt="Game Art">

      </div>


      <p class="card-title">
        Xbox One X
      </p>
      <p class="card-system">
        Xbox One
      </p>
      <p class="card-price">
        $599.99
      </p>
    </div>
  </div>

  <!-- 3 wide container holding the contents of the gamebox -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
    <!-- the actual cardbox -->
    <div class="card ">
      <a href="./itemview"> <div class='moreInfo'><p class="info">More Info</p></div></a>
      <!-- Contains the img -->
      <div class="gameArt">
        <div class='statusDiv statusRecycled'>Recycled</div>
        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/729015/2med.jpg" alt="Game Art">

      </div>


      <p class="card-title">
        Overwatch
      </p>
      <p class="card-system">
        Xbox One
      </p>
      <p class="card-price">
        $69.99
      </p>
    </div>
  </div>
  <!-- 3 wide container holding the contents of the gamebox -->
  <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
    <!-- the actual cardbox -->
    <div class="card ">
      <a href="./itemview"> <div class='moreInfo'><p class="info">More Info</p></div></a>
      <!-- Contains the img -->
      <div class="gameArt">

        <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/729007/3max.jpg" alt="Game Art">

      </div>


      <p class="card-title">
        Overwatch
      </p>
      <p class="card-system">
        Xbox One
      </p>
      <p class="card-price">
        $69.99
      </p>
    </div>
  </div>
</div>

@endsection