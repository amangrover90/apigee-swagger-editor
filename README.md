# apigee-swagger-editor

Drupal 8 module to use Swagger Editor to edit OpenAPI API Docs.

Steps to Install:
1. Clone this repository inside {drupal_docroot}/modules/custom folder.
2. Enable the module using drush or on the site from Extend. e.g. drush en apigee_swagger_editor
3. Clear the cache using drush or from Admin>Config>Development>Performance.
4. Once done, go to {your_drupal_website_base_url}/swagger-editor
5. You should be able to access and use the Swagger Editor.

Note - 
1. Initial Loading takes some time to load as the JS and CSS involved is very heavy. So TFFB varies from 1 minute to 2 minutes.
2. According to theme installed on your Drupal Website, you might have to adjust the css in apigee_swagger_editor/templates/apigee-swagger-editor-view.html.twig
3. This is an experimental module which I designed using Swagger Editor dist package for one requirement.
4. Any suggestions/improvements are welcome.