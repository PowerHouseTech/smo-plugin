The Thank-You Popup Generator plugin is a WordPress plugin that is an extension of WooCommerce. It adds a popup thank-you window after checkout, giving one last opportunity to enhance the customer's shopping experience. The popup allows for a customized thank-you message, along with a pleasing interface and an inspirational quotation. The popup loads after the customer has submitted their order and before (overlaying) the order confirmation page.

At present, for the purposes of getting the plugin functionality working, the following pieces are hard coded: color scheme, images, and quotation. As I have time, I intend to add the following additions to make the plugin customizable:
  1. Customizable color options for backgrounds and fonts
  2. File uploaders on the admin Settings page for a main image file and a logo file
  3. Integration with an API to pull in quotations, possibly with options for quotation categories, such as "inspirational," "humorous,"    etc.
  
The code for number 1, above, is included in this repo, but it is commented out because while the color picker frame was present on the Settings page, any changes would not be saved. There may be a problem with the validation of the input, but after much googling and trial and error, I was unable to find a solution. I will continue to work on this.
