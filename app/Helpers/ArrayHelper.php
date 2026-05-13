<?php

namespace App\Helpers;


class ArrayHelper
{
  /**
   * Check if an array is associative.
   *
   * @param array $array
   * @return bool
   */
  public static function is_associative(array $array): bool
  {
    return array_keys($array) !== range(0, count($array) - 1);
  }

  /**
   * Check if an array is multidimensional.
   *
   * @param array $array
   * @return bool
   */
  public static function is_multidimensional(array $array): bool
  {
    foreach ($array as $value) {
      if (is_array($value)) {
        return true;
      }
    }

    return false;
  }

  /**
   * Recursively convert an array to an object.
   *
   * @param mixed $data
   * @return mixed
   */
  public static function collection($data): mixed
  {
    $array = is_array($data);
    $object = is_object($data);

    if ($array) {
      $assoc = ArrayHelper::is_associative($data);
      $multi = ArrayHelper::is_multidimensional($data);

      if ($assoc || $multi) return (object) array_map(ArrayHelper::class . '::collection', $data);
      return $data;
    }


    if ($object) {
      foreach ($data as $key => $value) {
        $data->$key = ArrayHelper::collection($value);
      }
    }

    return $data;
  }
}
