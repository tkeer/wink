<?php

namespace Wink;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractWinkModel extends Model
{
    /**
     * Get the current connection name for the model.
     *
     * @return string
     */
    public function getConnectionName()
    {
        return config('wink.database_connection');
    }

    /**
     * Get the name of the password attribute for the user.
     *
     * @return string
     */
    public function getAuthPasswordName()
    {
        return 'password';
    }
}
