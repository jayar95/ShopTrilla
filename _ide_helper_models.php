<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Invite
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $email
 * @property int $sender
 * @property string $token
 * @property \Carbon\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereToken($value)
 */
	class Invite extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property int $id
 * @property string $name
 * @property string $store_id
 * @property float $price
 * @property string $description
 * @property int $quantity
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Store $store
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductPhoto[] $photos
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\ProductPhoto
 *
 * @property int $id
 * @property string $filepath
 * @property int $product_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereFilepath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ProductPhoto extends \Eloquent {}
}

namespace App{
/**
 * App\Store
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUserId($value)
 * @mixin \Eloquent
 */
	class Store extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $type
 * @property-read \App\Store $store
 * @property-read \App\VendorApplication $vendorApplication
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereType($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\VendorApplication
 *
 * @property int $id
 * @property int $user_id
 * @property int $approved
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereUserId($value)
 * @mixin \Eloquent
 */
	class VendorApplication extends \Eloquent {}
}

