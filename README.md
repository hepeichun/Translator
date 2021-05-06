# Translator

## 支持转换列表
- xml
- json
- url
- array
- serialize


## 提供方法（v2.x）
### Msg($msg)
```php
/**
 * 数据转换
 * @param string $from 来源格式
 * @return From
 */
public function from(string $from): From

/**
 * 支持的格式检查
 * @param string $format 探测目标格式
 * @return bool
 */
public static function hasFormat($format): bool
```

### From()
```php
/**
 * 转化的目标格式
 * @param string $to
 * @return mixed
 */
public function to(string $to)

/**
 * @return mixed
 */
public function encode()
/**
 * @return array
 */
public function decode() :array
```

#### 例子Json转xml：
```php
$json = '{"id":"1682333591565606218","wfr":"spider","for":"pc"}';
$translator = new \jdkysq\Translator\Msg($json);
$ret = $translator->from('json')->to('xml');
/**
 * <?xml version="1.0" encoding="UTF-8"?><root><id>1682333591565606218</id><wfr>spider</wfr><for>pc</for></root>
 */
var_dump($ret);
```


## 提供方法（v1.x）
### Translator->to
```
to(string $original , string $format, mixed $msg)
```
#### $original
- 来源格式

#### $format
- 目标格式

#### $msg
- 需要转换的消息

#### 返回值
- 变成目标格式


#### 例子Json转xml：
```php
$json = '{"id":"1682333591565606218","wfr":"spider","for":"pc"}';
$translator = new \jdkysq\Translator\Translator();
$ret = $translator->to('json','xml',$json);
/**
 * <?xml version="1.0" encoding="UTF-8"?><root><id>1682333591565606218</id><wfr>spider</wfr><for>pc</for></root>
 */
var_dump($ret);
```
### Translator->isFormat
```
isFormat(string $format)
```
主要用作检测某种格式是否支持
#### $format
- 目标格式

#### 返回值
- true 或者 false
- true 支持
- false 不支持


#### 例子Json转xml：
```php
$translator = new \jdkysq\Translator\Translator();
$ret = $translator->isFormat('xml');
var_dump($ret); //true
```

