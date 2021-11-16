// Show category description
function display_product_category_descriptions(){
  if (category_description($category_id)) {
    echo category_description($category_id);
} else {
	  echo '<div>Ontdek alle natuurlijke producten van Marie-Stella-Maris. Van zachte lichaamsverzorging tot luxueuze huisparfums. Ontworpen met aandacht voor detail. In een verscheidenheid van originele unisex geuren. Voor elk product dat je koopt, doneren we een vast bedrag aan schoondrinkwater-projecten wereldwijd.</div>';
  }
}
add_shortcode( 'woocommerce_single_product_summary', 'display_product_category_descriptions', 45);
