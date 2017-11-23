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
   * Returns the ID of the login response.
   *
   * @return int
   */
  public function getLgrId();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Validates whether the user agent is allowed to login. Returns true is the user agent has successfully logged in.
   * Returns false otherwise.
   *
   * @param array $data The data for validating the credentials.
   *
   * @return bool
   */
  public function validate(&$data);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
