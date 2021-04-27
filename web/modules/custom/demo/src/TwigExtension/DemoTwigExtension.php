<?php

namespace Drupal\demo\TwigExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Custom twig functions.
 */
class DemoTwigExtension extends AbstractExtension {

  public function getFunctions() {
    return [
      new TwigFunction('file_exists', function ($path_to_file) {
        $path = \Drupal::service('theme.manager')->getActiveTheme()->getPath();
        $path .= '/templates';
        $path .= '/' . $path_to_file;
        return file_exists($path);
      }),
    ];
  }

}
