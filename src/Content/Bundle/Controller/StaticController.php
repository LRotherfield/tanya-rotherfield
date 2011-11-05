<?php

namespace Content\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class StaticController extends Controller {

  /**
   * @Route("/")
   * @Template()
   */
  public function galleryAction() {
    return array(
        'images' => array(
            'Bug-etching',
            'Bug-house',
            'bug-in-glass',
            'Dandelions',
            'Dark-drawing',
            'F88',
            'Grandmas-button-box',
            'LOL-boat',
            'LOL-hut',
            'Other-dark-drawing',
            'Slate-Bug',
            'Study-of-an-orange',
            'Traceability-code-046-5',
            'Traceability-code-87776MG---Graphite-and-Watercolour-on-Paper---56cm-x-76cm',
            'Woodlouse-drawing',
            'Woudlouse-in-grass'
            ));
  }

}
