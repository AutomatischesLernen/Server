<?php

class User
{
  public static function register()
  {
    getApi()->get("/users", array("User", "index"), EpiApi::external);
    getApi()->get("/users/(\d+)", array("User", "get"), EpiApi::external);

    getApi()->put("/users/(\d+)", array("User", "put"), EpiApi::external);
    getApi()->post("/users", array("User", "post"), EpiApi::external);

    getApi()->get("/users/(\d+)/classes", array("User", "classes"), EpiApi::external);
  }

  public static function index()
  {
    return array(
      array(
        "id" => 1,
        "firstname" => "Sebastian",
        "lastname" => "Foo",
        "email" => "test@tu-bs.de",
        "createdAt" => time(),
        "updatedAt" => time(),
        "lastSeenAt" => time()
      )
    );
  }

  public static function get($id)
  {
    return array(
      "id" => 1,
      "firstname" => "Sebastian",
      "lastname" => "Foo",
      "email" => "test@tu-bs.de",
      "createdAt" => time(),
      "updatedAt" => time(),
      "lastSeenAt" => time()
    );
  }

  public static function put($id)
  {
    // TODO Update the user!
    getRoute()->redirect("/user/".$id);
  }

  public static function post()
  {
    // TODO Create the user, read the lastInsertId()
    $id = 1;
    getRoute()->redirect("/user/".$id);
  }

  public static function classes()
  {
    return array(
      array("id" => 1)
    );
  }
}