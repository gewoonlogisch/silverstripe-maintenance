<?php
class Maintenance_Extension extends Extension {
   
  /**
   * If current logged in member is not an admin and not trying to log in to the admin
   * or run a /dev/build then display an {@link ErrorPage}.
   * 
   * @see UnderConstruction_Decorator::requireDefaultRecords()
   * @return Void
   */
  public function onBeforeInit() {

    $siteConfig = SiteConfig::current_site_config();
    $siteMaintenance = $siteConfig->maintenance;

    if ($siteMaintenance) {
      //Check to see if running /dev/build
      $runningDevBuild = $this->owner && $this->owner->data() instanceof ErrorPage;
      
      if ( !Permission::check('ADMIN') 
          && strpos($_SERVER['REQUEST_URI'], '/admin') === false 
          && strpos($_SERVER['REQUEST_URI'], '/Security') === false 
          && !Director::isDev() 
          && $this->owner->dataRecord->ClassName != 'MaintenancePage'
          && !$runningDevBuild) {
      		$doorverwijspagina = SiteTree::get('MaintenancePage')->limit(1) ;

      		foreach ($doorverwijspagina as $pagina) {
      			header('Location:'.$pagina->URLSegment) ;
      		}
        exit;
      }
    }
  }
}
