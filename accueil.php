<?php
// Template Name: Accueil 
?>

<?php
// Inclure l'en-tête de la page
get_header();
// Récupérer les champs ACF nécessaires
$imageaccueil = get_field('image_de_la_banniere');
$imagecanettes = get_field('image_de_bas_de_page');
$produits = get_field('galerie_produit');
$CTAcommander = get_field('bouton_cta');
$avis1 = get_field('avis_1');
$avis2 = get_field('avis_2');
$avis3 = get_field('avis_3');
?>
       <main>
            <section class="banniere-accueil">
                <h1 class="text-center"><?php the_field('titre_banniere_accueil'); ?></h1>
                <img src="<?php echo $imageaccueil['url']; ?>" alt="<?php echo $imageaccueil['alt']; ?>">   
            </section>
        
            <div class="separator-rounded"></div>

            <section class="description-planty">
                <h3><?php the_field('titre_presentation_planty'); ?></h3>
                <p> <?php the_field('paragraphe_presentation_planty'); ?></p>
            </section>

            <section class="gouts">
                <h2><?php the_field('titre_partie_produits'); ?></h2>
                <p><?php the_field('sous-titre_partie_produits'); ?></p>
                <div class="image-grid">
                    <div class="image-box">
                            <img src="<?php echo esc_url( $produits['image_1']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_1']['alt'] ); ?>">
                            <div class="fruit">
                                <?php echo esc_html( $produits['nom_du_produit1'] );?> 
                                <br> <?php  if($produits['nom_1_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit1b']);} ; ?>
                            </div>
                    </div>
                    <div class="image-box">
                        <img src="<?php echo esc_url( $produits['image_2']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_2']['alt'] ); ?>">
                        <div class="fruit">
                            <?php echo esc_html( $produits['nom_du_produit2'] );?> 
                            <br> <?php  if($produits['nom_2_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit2b']);} ; ?>
                        </div>
                    </div>
                </div>
                <div class="image-grid">
                    <div class="image-box">
                        <img src="<?php echo esc_url( $produits['image_3']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_3']['alt'] ); ?>">
                        <div class="fruit">
                                <?php echo esc_html( $produits['nom_du_produit3'] );?> 
                                <br> <?php  if($produits['nom_3_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit3b']);} ; ?>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="<?php echo esc_url( $produits['image_4']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_4']['alt'] ); ?>">
                        <div class="fruit">
                                <?php echo esc_html( $produits['nom_du_produit4'] );?> 
                                <br> <?php  if($produits['nom_4_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit4b']);} ; ?>
                        </div>
                    </div>
                </div>
                <div class="CTA"><a href="<?php echo esc_url( $CTAcommander["url_bouton_cta"]['url'] ); ?>"><?php echo esc_html( $CTAcommander['nom_du_bouton'] ); ?></a></div>
            </section>
        
            <div class="separateur"></div>

            <section class="section_avis">
                <h2><?php the_field('titre_de_la_partie_avis'); ?></h2>
                <div class="avis">
                    <div class="avis_unique">
                        <div class="avis_image">
                        <img src="<?php echo esc_url( $avis1['image']['url'] ); ?>" alt="<?php echo esc_attr( $avis1['image']['alt'] ); ?>">
                        </div>
                        <div class="avis_personne">
                            <h3><?php echo esc_html( $avis1['prenom'] ); ?></h3>
                            <p><?php echo esc_html( $avis1['avis'] ); ?></p>
                        </div>
                    </div>
                    <div class="avis_unique">
                        <div class="avis_image">
                        <img src="<?php echo esc_url( $avis2['image']['url'] ); ?>" alt="<?php echo esc_attr( $avis2['image']['alt'] ); ?>">
                        </div>
                        <div class="avis_personne">
                            <h3><?php echo esc_html( $avis2['prenom'] ); ?></h3>
                            <p><?php echo esc_html( $avis2['avis'] ); ?></p>
                        </div>
                    </div>
                    <div class="avis_unique">
                        <div class="avis_image">
                        <img src="<?php echo esc_url( $avis3['image']['url'] ); ?>" alt="<?php echo esc_attr( $avis3['image']['alt'] ); ?>">
                        </div>
                        <div class="avis_personne">
                            <h3><?php echo esc_html( $avis3['prenom'] ); ?></h3>
                            <p><?php echo esc_html( $avis3['avis'] ); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <img src="<?php echo $imagecanettes['url']; ?>" alt="<?php echo $imagecanettes['alt']; ?>" class="image-bas-page">
<?php
    get_footer();