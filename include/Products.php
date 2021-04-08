<?php
	if(! class_exists('Products')) {
		class Products
		{
			static function columnsList( $vars, $sep = ', ' ){
				
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			static function valuesList( $vars, $sep = "', '" ){
				
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
			static function add( $params ){
				$columnsString = self::columnsList( $params );
				$valuesString = self::valuesList( $params );
				$tableName = get_class(); 
				
				
				$sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
				$result = $GLOBALS['db'] -> execute( $sql );
			
				if( $result )
					alerts('محصول با موفقیت ثبت شد!', 'success');

			}
			static function update(){}
			static function delete(){}
			static function find($where='TRUE',$order='id DESC',$count=10000,$offset=0){
                	$tableName = get_class();
                    $sql = "SELECT * FROM {$tableName} 
                    WHERE {$where} 
                    ORDER BY {$order} 
                    LIMIT {$offset}, {$count}";
                    $table = $GLOBALS['db'] -> execute( $sql );
                    return $table;
            }
		}
	}
?>