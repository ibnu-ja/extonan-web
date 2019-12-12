<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Anime
 *
 * @property string $id
 * @property string $judul
 * @property string|null $judul_alt
 * @property string $tahun
 * @property string $jenis
 * @property float $skor
 * @property string $sinopsis
 * @property string $musim
 * @property string $user_post_id
 * @property string|null $user_edit_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Gambar $gambar
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Genre[] $genres
 * @property-read int|null $genres_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereJudulAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereMusim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereSinopsis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereSkor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereUserEditId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anime whereUserPostId($value)
 */
	class Anime extends \Eloquent {}
}

namespace App{
/**
 * App\Gambar
 *
 * @property int $id
 * @property string $nama
 * @property string $dimensions
 * @property string $lokasi
 * @property string $anime_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Anime $anime
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar whereAnimeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar whereDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gambar whereUpdatedAt($value)
 */
	class Gambar extends \Eloquent {}
}

namespace App{
/**
 * App\Genre
 *
 * @property string $genre
 * @property string $anime_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Anime $anime
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereAnimeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereUpdatedAt($value)
 */
	class Genre extends \Eloquent {}
}

namespace App{
/**
 * App\GenreList
 *
 * @property string $genre
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GenreList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GenreList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GenreList query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GenreList whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GenreList whereName($value)
 */
	class GenreList extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int|null $is_admin
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

