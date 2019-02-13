<?php

namespace Drupal\migration_boilerplate\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Checks the value of a process.
 *
 * @MigrateProcessPlugin(
 *   id = "check_value"
 * )
 *
 * To do check the value use the following:
 *
 * @code
 * field_text:
 *   plugin: check_value
 *   source: text
 * @endcode
 *
 */
class CheckValue extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    var_dump($value);
  }
}