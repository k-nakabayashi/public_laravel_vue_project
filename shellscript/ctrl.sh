#!/bin/sh

php artisan make:controller /Actions/ApiRequest/CheckApi --invokable ;
php artisan make:controller /Actions/ApiRequest/RestApi --resource --model=Tw_Api_Request ;
php artisan make:controller /Actions/AutoFunction/AutoFavortite/StartAutoFavoriteBySnsAccount --invokable ;
php artisan make:controller /Actions/AutoFunction/AutoFavortite/StopAutFavoritBySnsAccount --invokable ;
php artisan make:controller /Actions/AutoFunction/AutoFollow/StartAutoFollowBySnsAccount --invokable ;
php artisan make:controller /Actions/AutoFunction/AutoFollow/StopAutoFollowBySnsAccount --invokable ;
php artisan make:controller /Actions/AutoFunction/AutoFollow/StartAutoUnfollowByAnsAccount --invokable ;
php artisan make:controller /Actions/AutoFunction/AutoFollow/StopAutoUnfollowBySnsAccount --invokable ;
php artisan make:controller /Actions/AutoFunction/AutoTweet/StartAutoTweetBySnsAccount --invokable ;
php artisan make:controller /Actions/AutoFunction/AutoTweet/StopAutoTweetBySnsAccount --invokable ;
php artisan make:controller /Actions/KeyPattern/RestKeyPattern --resource --model=Key_Pattern ;
php artisan make:controller /Actions/KeyPattern/ChooseKeyPatternForFavorite --invokable ;
php artisan make:controller /Actions/KeyPattern/ChooseKeyPatternForFollow --invokable ;
php artisan make:controller /Actions/KeyPattern/removeKeyPatternForFavorite --invokable ;
php artisan make:controller /Actions/KeyPattern/RemoveKeyPatternForFollow --invokable ;
php artisan make:controller /Actions/SnsAccount/RestSnsAccount --resource --model=Tw_Account ;
php artisan make:controller /Actions/TargetAccount/RestTargetAccounts --resource --model=Tw_Target_Account ;
php artisan make:controller /Actions/Tweet/RestTweet --resource --model=Tw_Tweet ;