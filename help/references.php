<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../config.php");
        $page_title = "References - ".$product_name;
        include($root_folder."/blocks/header.php");
    ?>

     <style>

    p {
        font-size: 0.95rem;
    }

    </style>
    
    <?php /* ----------------- START OF PAGE ----------------- */ ?>
    
    <div class="help-wrapper">
        <section class="heading-holder">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h1 class="text-center"><b>Scientific References</b></h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                
                	<?php /* add clickable class to this div if links should be clickable! */?>
                    <div class="col-12 py-5 references">
                    
                        <p><b>“Mapping cortical hubs in tinnitus”, study available at:</b></p>
                        <p><a class="reference-link" href="https://bmcbiol.biomedcentral.com/articles/10.1186/1741-7007-7-80">https://bmcbiol.biomedcentral.com/articles/10.1186/1741-7007-7-80</a></p>

                        <p><b>“Intracranial Mapping of a Cortical Tinnitus System using Residual Inhibition”, study available at:</b></p>

                        <p><a class="reference-link" href="https://www.cell.com/current-biology/fulltext/S0960-9822(15)00278-X">https://www.cell.com/current-biology/fulltext/S0960-9822(15)00278-X</a></p>

                        <p><b>“Neuroanatomical abnormalities in chronic tinnitus in the human brain”, study available at:</b></p>

                        <p><a class="reference-link" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4148481/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4148481/</a></p>

                        <p><b>“Tinnitus is the result of the brain trying, but failing, to repair itself”, study available at:</b></p>

                        <p><a class="reference-link" href="https://www.sciencedaily.com/releases/2011/01/110112122504.html">https://www.sciencedaily.com/releases/2011/01/110112122504.html</a></p>

                        <p><b>“B Vitamins and the Brain: Mechanisms, Dose and Efficacy—A Review”, study available at:</b></p>                       

                        <p><a class="reference-link" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4772032/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4772032/</a></p>

                        <p><b>“Neuroprotective potential of phytochemicals”, study available at:</b></p>                       

                        <p><a class="reference-link" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3459459/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3459459/</a></p>

                        <p><b>“Free radical production and ischemic brain damage: influence of postischemic oxygen tension”, study available at:</b></p>                       

                        <p><a class="reference-link" href="https://pubmed.ncbi.nlm.nih.gov/2058415/">https://pubmed.ncbi.nlm.nih.gov/2058415/</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="heading-holder">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2 class="text-center"><b><?php echo $product_name; ?> Label</b></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 py-5">
                        <img class="img-fluid mx-auto d-block" src="../statics/img/main-product-label.jpg">
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php /* ----------------- END OF PAGE ----------------- */ ?>
    
	<footer>
    	<?php 
    	include($root_folder."/blocks/footer.php");
    	?>
    </footer>
    <?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>