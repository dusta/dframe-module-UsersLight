Add to boostrap.php line $this->providers['modules']

``` php 

class Bootstrap
{

    public function __construct()
    {

        /** ... */
        $this->providers['modules'] = [
            \Users\Module::class
        ];

         /** ... */
        return $this;
    }

}


```

And in composer.json add **"Users\\": "modules/Users/src"**

``` bash
    "autoload": {
        "psr-4": {
            "": "app/",
            "Users\\": "modules/Users/src"
        }
    },
```