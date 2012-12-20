<?php

/**
 * language actions.
 *
 * @package    jobeet
 * @subpackage language
 * @author     Martial
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class languageActions extends sfActions
{
  public function executeChangeLanguage(sfWebRequest $request)
  {
    $form = new sfFormLanguage(
      $this->getUser(),
      array('languages' => array('en', 'fr'))
    );

    $form->process($request);
    $form->disableLocalCSRFProtection();
    
    return $this->redirect('localized_homepage');
  }
}
