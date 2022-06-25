### Usage
Define Aparser instance
```
$aparser = new ResetButton\Aparser\Aparser('http://192.168.2.31:20000/API','gaa32435hyh54321');
```

#### Shortcut API methods
```
$aparser->getProxy(["checkers" => [ "default"]]);
```

#### Builder mode
```
$aparserProxyRequest = new \ResetButton\Aparser\Dto\Request\AparserGetProxyRequest();
$aparserProxyRequest->setCheckers(["default"]);
$aparser->makeRequest($aparserProxyRequest);
```
#### Raw request from docs or via export API preset
```
$json = '{
        "password": "gaa32435hyh54321",
        "action": "getProxies",
        "data": {
            "checkers": [
                "default"
            ]
        }
    }';

$aparser->makeRawRequest($json);
```
