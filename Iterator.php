public class Iterator {
  public $arr;
  public $index = 0;
  function __construct( $in_arr ) {
    $arr = $in_arr;
  }
  function hasNext() {
    if ( sizeof ( $arr ) >= $index ) {
      return false;
    } else {
      return true;
    }
  }
  function next() {
    return $arr[$index++];
  }
  function remove() {
    $arr_temp = $arr;
    unset( $arr_temp[$index] );
    for ( $i = $index; $i < sizeof( $arr ); $i++ ) {
      $arr_temp[$i] = $arr_temp[$i+1];
    }
    $arr = $arr_temp;
    return $arr[$index];
  }
  function previous() {
    return $arr[$index--];
  }
  function set( $in_set ) {
    $set_old = $arr[$index];
    $arr[$index] = $in_set;
    return $set_old;
  }
}
