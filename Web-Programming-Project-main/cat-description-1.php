<?php 
$title = 'Bunker Buster';
include 'header.php';
$cat_id = 1;
?>

<!-- Cat description body container -->
<div class="body-container">

    <!-- Banner image -->
    <div class="desc-banner-container">
        <img src="images/kossi.png" alt="banner" draggable="false">
    </div>

    <!-- Cat description text -->
    <div class="article">
        <h1>Bunker Buster</h1>
        <br>
        <p>Bunker buster, the Calico cat extraordinaire, struts through life with the elegance of a ninja at a disco party. Bunker buster's purr is rumored to have magical giggling powers. This whiskered wonder is a legend in the neighborhood, turning the ordinary into the extraordinary with each whisker twitch.
           <br><br>When she's not busy chasing imaginary mice or practicing his synchronized tail twitching, Bunker buster enjoys contemplating the meaning of life while perched on the highest vantage point she can find – be it a precarious stack of pillows or the summit of the refrigerator.
           
           <br><br>Her calico fur is as soft and velvety as a playful breeze, and her eyes sparkle with mischievous madness. Bunker buster has a talent for turning everyday objects into his personal playground, performing acrobatic feats on precarious stacks of laundry and executing daring jumps from the top of the bookshelf.
           <br><br>One day, Bunker buster's fame reached new heights as the neighborhood organized a grand feline fiesta in her honor. The event, aptly named "Bunker buster's Carnival of Whiskers," became the talk of the town, with cats and humans alike eagerly awaiting the star of the show's arrival.
           <br><br>As Bunker buster made her grand entrance, a trail of twinkling stardust seemed to follow in her wake, adding an otherworldly charm to the already enchanting atmosphere. The neighborhood cats gathered around, their eyes wide with admiration, as Bunker buster demonstrated his legendary synchronized tail twitching a dance move so mesmerizing that even the most stoic of felines couldn't resist joining in.</p>
    </div>

    <!-- Adopt cat button -->
    <div class="button-placement">
        <a href="adoption-form.php?cat_id=<?php echo $cat_id; ?>"><button>Adopt me</button></a>
        <br>
    </div>
</div>

<?php include 'footer.php'; ?>
