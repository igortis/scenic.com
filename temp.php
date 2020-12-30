<td style="color:#d83919;" itemprop="price" content="'.(



$model_color->{$price_action} > 0 ? $model_color->{$price_action}:$model_color->{$price_key}).'">' . (

$model_color->{$price_action} > 0 ? '<span class="oldprice">' . $model_color->{$price_key} . '</span>' . $model_color->{$price_action} . '*' : ($model_color->{$price_key}==0.00?'нет в наличии':$model_color->{$price_key}) ) 


. '</td>
                        

 ($model_color->{$price_action} > 0 ? '<span class="oldprice">' . $model_color->{$price_key} . '</span>' . $model_color->{$price_action} : ($model_color->{$price_key} == 0 ? 'под заказ' : $model_color->{$price_key})) . '</td>
                        <td>