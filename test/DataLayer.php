<?php
//----------------------------------------------------------------------------------------------------------------------
class DataLayer extends \SetBased\DataLayer\StaticDataLayer
{
  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_magic_constant01.
   */
  static function magicConstant01(  )
  {
    return self::executeSingleton1( 'CALL tst_magic_constant01()');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_magic_constant02.
   */
  static function magicConstant02(  )
  {
    return self::executeSingleton1( 'CALL tst_magic_constant02()');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_magic_constant03.
   */
  static function magicConstant03(  )
  {
    return self::executeSingleton1( 'CALL tst_magic_constant03()');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_magic_constant04.
   */
  static function magicConstant04(  )
  {
    return self::executeSingleton1( 'CALL tst_magic_constant04()');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_magic_constant05.
   */
  static function magicConstant05(  )
  {
    return self::executeSingleton1( 'CALL tst_magic_constant05()');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test01.
   */
  static function test01( $p_param00, $p_param01, $p_param02, $p_param03, $p_param04, $p_param05, $p_param06, $p_param07, $p_param08, $p_param09, $p_param10, $p_param11, $p_param12, $p_param13, $p_param14, $p_param15, $p_param16, $p_param17, $p_param26, $p_param27 )
  {
    return self::executeNone( 'CALL tst_test01('.self::quoteNum( $p_param00 ).','.self::quoteNum( $p_param01 ).','.self::quoteNum( $p_param02 ).','.self::quoteNum( $p_param03 ).','.self::quoteNum( $p_param04 ).','.self::quoteNum( $p_param05 ).','.self::quoteNum( $p_param06 ).','.self::quoteNum( $p_param07 ).','.self::quoteBit( $p_param08 ).','.self::quoteString( $p_param09 ).','.self::quoteString( $p_param10 ).','.self::quoteString( $p_param11 ).','.self::quoteString( $p_param12 ).','.self::quoteNum( $p_param13 ).','.self::quoteString( $p_param14 ).','.self::quoteString( $p_param15 ).','.self::quoteString( $p_param16 ).','.self::quoteString( $p_param17 ).','.self::quoteString( $p_param26 ).','.self::quoteString( $p_param27 ).')' );
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test02.
   */
  static function test02( $p_param00, $p_param01, $p_param02, $p_param03, $p_param04, $p_param05, $p_param06, $p_param07, $p_param08, $p_param09, $p_param10, $p_param11, $p_param12, $p_param13, $p_param14, $p_param15, $p_param16, $p_param17, $p_param18, $p_param19, $p_param20, $p_param21, $p_param22, $p_param23, $p_param24, $p_param25, $p_param26, $p_param27 )
  {
    $query = 'CALL tst_test02( '.self::quoteNum( $p_param00 ).','.self::quoteNum( $p_param01 ).','.self::quoteNum( $p_param02 ).','.self::quoteNum( $p_param03 ).','.self::quoteNum( $p_param04 ).','.self::quoteNum( $p_param05 ).','.self::quoteNum( $p_param06 ).','.self::quoteNum( $p_param07 ).','.self::quoteBit( $p_param08 ).','.self::quoteString( $p_param09 ).','.self::quoteString( $p_param10 ).','.self::quoteString( $p_param11 ).','.self::quoteString( $p_param12 ).','.self::quoteNum( $p_param13 ).','.self::quoteString( $p_param14 ).','.self::quoteString( $p_param15 ).','.self::quoteString( $p_param16 ).','.self::quoteString( $p_param17 ).',?,?,?,?,?,?,?,?,'.self::quoteString( $p_param26 ).','.self::quoteString( $p_param27 ).' )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'bbbbbbbb', $null,$null,$null,$null,$null,$null,$null,$null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_param18 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_param18, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $n = strlen( $p_param19 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 1, substr( $p_param19, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $n = strlen( $p_param20 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 2, substr( $p_param20, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $n = strlen( $p_param21 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 3, substr( $p_param21, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $n = strlen( $p_param22 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 4, substr( $p_param22, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $n = strlen( $p_param23 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 5, substr( $p_param23, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $n = strlen( $p_param24 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 6, substr( $p_param24, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $n = strlen( $p_param25 );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 7, substr( $p_param25, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $ret = self::$ourMySql->affected_rows;

    $stmt->close();
    self::$ourMySql->next_result();

    return $ret;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_bulk_insert01.
   */
  static function testBulkInsert01( $theData )
  {
    self::Query(  'CALL tst_test_bulk_insert01()');
    $sql = "INSERT INTO `TST_TEMPO`(`tst_col1`,`tst_col2`,`tst_col3`,`tst_col4`,`tst_col5`,`tst_col6`,`tst_col7`,`tst_col8`,`tst_col9`,`tst_col10`,`tst_col11`,`tst_col12`,`tst_col13`,`tst_col14`,`tst_col15`,`tst_col16`,`tst_col17`,`tst_col18`,`tst_col19`,`tst_col20`)";
    $first = true;
    foreach( $theData as $row )
    {
        if ($first) $sql .=' values('.self::quoteNum($row['field1']).','.self::quoteNum($row['field2']).','.self::quoteNum($row['field3']).','.self::quoteNum($row['field4']).','.self::quoteNum($row['field5']).','.self::quoteNum($row['field6']).','.self::quoteNum($row['field7']).','.self::quoteNum($row['field8']).','.self::quoteNum($row['field9']).','.self::quoteString($row['field10']).','.self::quoteString($row['field11']).','.self::quoteString($row['field12']).','.self::quoteString($row['field13']).','.self::quoteString($row['field14']).','.self::quoteString($row['field15']).','.self::quoteString($row['field16']).','.self::quoteString($row['field17']).','.self::quoteString($row['field18']).','.self::quoteString($row['field19']).','.self::quoteBit($row['field20']).')';
        else        $sql .=',      ('.self::quoteNum($row['field1']).','.self::quoteNum($row['field2']).','.self::quoteNum($row['field3']).','.self::quoteNum($row['field4']).','.self::quoteNum($row['field5']).','.self::quoteNum($row['field6']).','.self::quoteNum($row['field7']).','.self::quoteNum($row['field8']).','.self::quoteNum($row['field9']).','.self::quoteString($row['field10']).','.self::quoteString($row['field11']).','.self::quoteString($row['field12']).','.self::quoteString($row['field13']).','.self::quoteString($row['field14']).','.self::quoteString($row['field15']).','.self::quoteString($row['field16']).','.self::quoteString($row['field17']).','.self::quoteString($row['field18']).','.self::quoteString($row['field19']).','.self::quoteBit($row['field20']).')';
        $first = false;
    }
    self::Query( $sql );
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_bulk_insert02.
   */
  static function testBulkInsert02( $theData )
  {
    self::Query(  'CALL tst_test_bulk_insert02()');
    $sql = "INSERT INTO `TST_TEMPO`(`tst_col1`,`tst_col4`,`tst_col5`)";
    $first = true;
    foreach( $theData as $row )
    {
        if ($first) $sql .=' values('.self::quoteNum($row['field1']).','.self::quoteNum($row['field4']).','.self::quoteNum($row['field5']).')';
        else        $sql .=',      ('.self::quoteNum($row['field1']).','.self::quoteNum($row['field4']).','.self::quoteNum($row['field5']).')';
        $first = false;
    }
    self::Query( $sql );
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_function.
   */
  static function testFunction( $p_a, $p_b )
  {
    return self::executeSingleton0( 'SELECT tst_test_function('.self::quoteNum( $p_a ).','.self::quoteNum( $p_b ).') ' );
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_log.
   */
  static function testLog(  )
  {
    return self::executeLog( 'CALL tst_test_log()' );
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_max_allowed_packet.
   */
  static function testMaxAllowedPacket( $p_tmp_blob )
  {
    $query = 'CALL tst_test_max_allowed_packet( ? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_tmp_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_tmp_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $tmp = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $value )
      {
        $new[] = $value;
      }
      $tmp[] = $new;
    }

    $b = $stmt->fetch();

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );
    if (sizeof($tmp)!=1) self::mysqlError( 'The unexpected number of rows, expected 1 row.' );

    return $tmp[0][0];
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_none.
   */
  static function testNone( $p_count )
  {
    return self::executeNone( 'CALL tst_test_none('.self::quoteNum( $p_count ).')' );
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_none_with_lob.
   */
  static function testNoneWithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_none_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $ret = self::$ourMySql->affected_rows;

    $stmt->close();
    self::$ourMySql->next_result();

    return $ret;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_row0a.
   */
  static function testRow0a( $p_count )
  {
    return self::executeRow0( 'CALL tst_test_row0a('.self::quoteNum( $p_count ).')');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_row0a_with_lob.
   */
  static function testRow0aWithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_row0a_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $tmp = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $key => $value )
      {
        $new[$key] = $value;
      }
      $tmp[] = $new;
    }

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );
    if (sizeof($tmp)>1) self::mysqlError( 'The unexpected number of rows, expected 0 or 1 rows.' );

    return ($tmp) ? $tmp[0] : null;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_row1a.
   */
  static function testRow1a( $p_count )
  {
    return self::executeRow1( 'CALL tst_test_row1a('.self::quoteNum( $p_count ).')');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_row1a_with_lob.
   */
  static function testRow1aWithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_row1a_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $tmp = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $key => $value )
      {
        $new[$key] = $value;
      }
      $tmp[] = $new;
    }

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );
    if (sizeof($tmp)!=1) self::mysqlError( 'The unexpected  number of rows,  expected 1 row.' );

    return $row;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_rows1.
   */
  static function testRows1( $p_count )
  {
    return self::executeRows( 'CALL tst_test_rows1('.self::quoteNum( $p_count ).')' );
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_rows1_with_lob.
   */
  static function testRows1WithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_rows1_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $tmp = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $key => $value )
      {
        $new[$key] = $value;
      }
       $tmp[] = $new;
    }

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );

    return $tmp;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_rows_with_index1.
   */
  static function testRowsWithIndex1( $p_count )
  {
    $result = self::Query( 'CALL tst_test_rows_with_index1('.self::quoteNum( $p_count ).')');
    $ret = array();
    while($row = $result->fetch_array( MYSQLI_ASSOC )) $ret[$row['tst_c01']][$row['tst_c02']][] = $row;
    $result->close();
    self::$ourMySql->next_result();
    return $ret;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_rows_with_index1_with_lob.
   */
  static function testRowsWithIndex1WithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_rows_with_index1_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $ret = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $key => $value )
      {
        $new[$key] = $value;
      }
      $ret[$new['tst_c01']][$new['tst_c02']][] = $new;
    }

    $b = $stmt->fetch();

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );

    return $ret;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_rows_with_key1.
   */
  static function testRowsWithKey1( $p_count )
  {
    $result = self::Query( 'CALL tst_test_rows_with_key1('.self::quoteNum( $p_count ).')');
    $ret = array();
    while($row = $result->fetch_array( MYSQLI_ASSOC )) $ret[$row['tst_c01']][$row['tst_c02']][$row['tst_c03']] = $row;
    $result->close();
    self::$ourMySql->next_result();
    return  $ret;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_rows_with_key1_with_lob.
   */
  static function testRowsWithKey1WithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_rows_with_key1_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $ret = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $key => $value )
      {
        $new[$key] = $value;
      }
      $ret[$new['tst_c01']][$new['tst_c02']][$new['tst_c03']] = $new;
    }

    $b = $stmt->fetch();

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );

    return $ret;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_singleton0a.
   */
  static function testSingleton0a( $p_count )
  {
    return self::executeSingleton0( 'CALL tst_test_singleton0a('.self::quoteNum( $p_count ).')');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_singleton0a_with_lob.
   */
  static function testSingleton0aWithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_singleton0a_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $tmp = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $value )
      {
        $new[] = $value;
      }
      $tmp[] = $new;
    }

    $b = $stmt->fetch();

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );
    if (sizeof($tmp)>1) self::mysqlError( 'The unexpected number of rows, expected 0 or 1 rows.' );

    return ($tmp) ? $tmp[0][0] : null;
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_singleton1a.
   */
  static function testSingleton1a( $p_count )
  {
    return self::executeSingleton1( 'CALL tst_test_singleton1a('.self::quoteNum( $p_count ).')');
  }

  //-------------------------------------------------------------------------------------------------------------------
  /** @sa Stored Routine tst_test_singleton1a_with_lob.
   */
  static function testSingleton1aWithLob( $p_count, $p_blob )
  {
    $query = 'CALL tst_test_singleton1a_with_lob( '.self::quoteNum( $p_count ).',? )';
    $stmt  = self::$ourMySql->prepare( $query );
    if (!$stmt) self::mysqlError( 'prepare failed' );

    $null = null;
    $b = $stmt->bind_param( 'b', $null );
    if (!$b) self::mysqlError( 'bind_param failed' );

    $n = strlen( $p_blob );
    $p = 0;
    while ($p<$n)
    {
      $b = $stmt->send_long_data( 0, substr( $p_blob, $p, self::$ourChunkSize ) );
      if (!$b) self::mysqlError( 'send_long_data failed' );
      $p += self::$ourChunkSize;
    }

    $b = $stmt->execute();
    if (!$b) self::mysqlError( 'execute failed' );

    $row = array();
    self::stmt_bind_assoc( $stmt, $row );

    $tmp = array();
    while (($b = $stmt->fetch()))
    {
      $new = array();
      foreach( $row as $value )
      {
        $new[] = $value;
      }
      $tmp[] = $new;
    }

    $b = $stmt->fetch();

    $stmt->close();
    self::$ourMySql->next_result();

    if ($b===false) self::mysqlError( 'mysqli_stmt::fetch failed' );
    if (sizeof($tmp)!=1) self::mysqlError( 'The unexpected number of rows, expected 1 row.' );

    return $tmp[0][0];
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------