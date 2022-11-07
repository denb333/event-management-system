<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/wedding2.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">ORGANIZE AND DECORATE WEDDING PARTIES</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/wedding2.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>CREATE UNIQUE MOMENT WITH US</h5><!--content title-->
                                                <p>
                                                Bliss Wedding & Event Planner Vietnam is a 
                                                leading wedding planner specializing in providing 
                                                consulting services, planning, organizing and decorating high-class weddings. 
                                                Together with creative decorators, we have founded famous brands such as “Bliss Festival Décor” and “Bliss Flower Design”.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Upholding beauty and conquering creativity are the factors that make 
                                                Bliss constantly implement flying ideas and build sustainable experiences for customers.
                                                </p>

                                                <p>
                                                At any time of the year, whether it's event decoration,
                                                 Christmas decoration, Tet decoration, Christmas decoration, or wedding decoration, as long as you have Bliss, 
                                                nothing can stop you from touching the uniqueness. his beauties.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Wedding</h1><!--title-->
                            <p><!--content-->
                            The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#urbanxchange"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
         
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">ORGANIZE AND DECORATE BIRTHDAY PARTIES</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/birthday2.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>CREATE UNIQUE MOMENT WITH US</h5><!--content title-->
                                                <p>
                                                Includes 1 Helium-Filled Balloon Bouquet (5ct), up to 2 
                                                Number Balloons, 2 Balloon Weights, Plates, Napkins and Cutlery 
                                                with team member setup prior to arrival. *If selected package is out 
                                                of stock a similar alternative
                                                 package will be provided” to the description section.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Upholding beauty and conquering creativity are the factors that make 
                                                Bliss constantly implement flying ideas and build sustainable experiences for customers.
                                                </p>

                                                <p>
                                                At any time of the year, whether it's event decoration,
                                                 Christmas decoration, Tet decoration, Christmas decoration, or wedding decoration, as long as you have Bliss, 
                                                nothing can stop you from touching the uniqueness. his beauties.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Birthday</h1><!--title-->
                            <p><!--content-->
                            Whether an all-day or the ultimate extravaganza that
                            lasts well into the wee hours, our Urban Events team is here to make sure all your birthday
                            party wishes come true so you can kick back, drink up and enjoy your special day!
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#urbanxchange"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/fashion2.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">ORGANIZE AND DECORATE WEDDING PARTIES</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/fashion2.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>CREATE UNIQUE MOMENT WITH US</h5><!--content title-->
                                                <p>
                                                Bliss Wedding & Event Planner Vietnam is a 
                                                leading wedding planner specializing in providing 
                                                consulting services, planning, organizing and decorating high-class weddings. 
                                                Together with creative decorators, we have founded famous brands such as “Bliss Festival Décor” and “Bliss Flower Design”.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Upholding beauty and conquering creativity are the factors that make 
                                                Bliss constantly implement flying ideas and build sustainable experiences for customers.
                                                </p>

                                                <p>
                                                At any time of the year, whether it's event decoration,
                                                 Christmas decoration, Tet decoration, Christmas decoration, or wedding decoration, as long as you have Bliss, 
                                                nothing can stop you from touching the uniqueness. his beauties.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Fashion</h1><!--title-->
                            <p><!--content-->
                            Fast becoming to go-to location for fashion events, PR gatherings and product launches, 
                            The Urban Purveyor Group venues provide you with choice and quality in premium locations 
                            for all your event needs.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#urbanxchange"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/meeting2.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">ORGANIZE AND DECORATE WEDDING PARTIES</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/meeting2.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>CREATE UNIQUE MOMENT WITH US</h5><!--content title-->
                                                <p>
                                                Bliss Wedding & Event Planner Vietnam is a 
                                                leading wedding planner specializing in providing 
                                                consulting services, planning, organizing and decorating high-class weddings. 
                                                Together with creative decorators, we have founded famous brands such as “Bliss Festival Décor” and “Bliss Flower Design”.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Upholding beauty and conquering creativity are the factors that make 
                                                Bliss constantly implement flying ideas and build sustainable experiences for customers.
                                                </p>

                                                <p>
                                                At any time of the year, whether it's event decoration,
                                                 Christmas decoration, Tet decoration, Christmas decoration, or wedding decoration, as long as you have Bliss, 
                                                nothing can stop you from touching the uniqueness. his beauties.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Meeting</h1><!--title-->
                            <p><!--content-->
                            From formal, to not-so-formal, our flexible event
                            spaces can cater to your every need for meetings and conferences large or small, and our
                            dedicated event team can assist with all aspects of your event planning.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#urbanxchange"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon--> 
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
