<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Login;

/**
 * Interface for login handlers.
 */
interface LoginHandler
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Validates whether the user agent is allowed to login. Returns:
   * <ul>
   * <li>true  The user agent has successfully logged in.
   * <li>false The user agent has failed to log in.
   * <li>null  No validation has been done (e.g. only a login form has been generated).
   * </ul>
   *
   * @return bool|null
   */
  public function validate();

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
