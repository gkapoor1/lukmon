<?php

namespace Drupal\schema_person\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaAggregateRatingBase;

/**
 * Provides a plugin for the 'schema_person_aggregate_rating' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_person_aggregate_rating",
 *   label = @Translation("AggregateRating"),
 *   description = @Translation("AggregateRating (the numeric AggregateRating of the item)."),
 *   name = "aggregateRating",
 *   group = "schema_person",
 *   weight = 11,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaPersonAggregateRating extends SchemaAggregateRatingBase {

}
