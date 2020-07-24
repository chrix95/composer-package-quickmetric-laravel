# QuickMetrics Laravel Composer package
This is a composer package that integrates quickmetrics

##### Setup process
- Clone the project to your local repository
- Update your quickmetrics api key in your project `.env` file, `QUICKMETRICS_API_KEY=`
- Import the pacakge into your project directory by adding this to your respositories:
```
"quickmetrics-laravel": {
  "type": "path",
  "url": "../packages/devchris/quickmetrics-laravel",
  "options": {
    "symlink": true
  }
}
```
- Run `composer update` to the new package to your vendor folder 

##### Author
Christopher Okokon Ntuk <engchris95@gmail.com> Dechris