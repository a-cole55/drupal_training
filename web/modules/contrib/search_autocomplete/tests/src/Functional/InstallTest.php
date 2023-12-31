<?php

namespace Drupal\Tests\search_autocomplete\Functional;

use Drupal\search_autocomplete\Entity\AutocompletionConfiguration;
use Drupal\Tests\BrowserTestBase;

/**
 * Test proper module installation.
 *
 * @group Search Autocomplete
 *
 * @ingroup seach_auocomplete
 */
class InstallTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['node', 'search_autocomplete'];

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => 'Search Autocomplete installation test.',
      'description' => 'Test the Search Autocomplete installation.',
      'group' => 'Search Autocomplete',
    ];
  }

  /**
   * Check that Search Autocomplete module installs properly.
   *
   * 1) Verify that anonymous users can't access admin paths.
   *
   * 2) Verify that registered users can't access admin paths.
   *
   * 3) Verify that admin users can access admin paths.
   *
   * 4) Check that menu links is added in Search fieldset of Configuration page.
   *
   */
  public function testInstallModule() {

    // Define paths to be tested.
    $admin_paths = [
      '/admin/config/search/search_autocomplete',
      '/admin/config/search/search_autocomplete/add',
      '/admin/config/search/search_autocomplete/manage/search_block',
      '/admin/config/search/search_autocomplete/manage/search_block/delete',
    ];

    /* ----------------------------------------------------------------------
     * 1) Verify that anonymous users can't access admin paths.
     */

    // Check each of the paths to make sure we don't have access. At this point
    // we haven't logged in any users, so the client is anonymous.
    foreach ($admin_paths as $path) {
      $this->drupalGet($path);
      $this->assertSession()->statusCodeEquals(403, "Access denied to anonymous for path: $path");
    }

    /* ----------------------------------------------------------------------
     * 2) Verify that registered users can't access admin paths.
     */

    // Create a user with no permissions.
    $noperms_user = $this->drupalCreateUser();
    $this->drupalLogin($noperms_user);
    // Should be the same result for forbidden paths, since the user needs
    // special permissions for these paths.
    foreach ($admin_paths as $path) {
      $this->drupalGet($path);
      $this->assertSession()->statusCodeEquals(403, "Access denied to generic user for path: $path");
    }

    /* ----------------------------------------------------------------------
     * 3) Verify that admin users can access admin paths.
     */

    // Create a user who can administer search autocomplete.
    $perms_user = $this->drupalCreateUser(['administer search autocomplete']);
    $this->drupalLogin($perms_user);
    // Forbidden paths aren't forbidden any more.
    foreach ($admin_paths as $unforbidden) {
      $this->drupalGet($unforbidden);
      $this->assertSession()->statusCodeEquals(200, "Access not granted to admin user for path: $unforbidden");
    }

    /* ----------------------------------------------------------------------
     * 4) Check that menu links is added in Search fieldset of Configuration
     * page.
     */

    // Create admin user.
    $admin_user = $this->drupalCreateUser([
      'access administration pages',
      'administer search autocomplete',
    ]);
    $this->drupalLogin($admin_user);
    // Now that we have the admin user logged in, check the menu links.
    $this->drupalGet('/admin/config');
    $this->assertSession()->linkByHrefExists("admin/config/search/search_autocomplete");
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Make default entity deletable for testing purpose.
    $config = AutocompletionConfiguration::load('search_block');
    $config->setDeletable(TRUE);
    $config->save();
  }

}
