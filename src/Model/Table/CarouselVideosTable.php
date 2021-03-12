<?php
declare(strict_types=1);

namespace CarouselVideos\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CarouselVideos Model
 *
 * @method \App\Model\Entity\CarouselVideo newEmptyEntity()
 * @method \App\Model\Entity\CarouselVideo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CarouselVideo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CarouselVideo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CarouselVideo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CarouselVideo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CarouselVideo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CarouselVideo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarouselVideo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarouselVideo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CarouselVideo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CarouselVideo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CarouselVideo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CarouselVideosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carousel_videos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('caption_paragraph')
            ->maxLength('caption_paragraph', 255)
            ->allowEmptyString('caption_paragraph');

        $validator
            ->scalar('caption_url_title')
            ->maxLength('caption_url_title', 45)
            ->requirePresence('caption_url_title', 'create')
            ->notEmptyString('caption_url_title');

        $validator
            ->scalar('caption_url')
            ->maxLength('caption_url', 255)
            ->requirePresence('caption_url', 'create')
            ->notEmptyString('caption_url');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->requirePresence('file', 'create')
            ->notEmptyFile('file');

        $validator
            ->nonNegativeInteger('length')
            ->requirePresence('length', 'create')
            ->notEmptyString('length');

        $validator
            ->scalar('mobile_image')
            ->maxLength('mobile_image', 255)
            ->requirePresence('mobile_image', 'create')
            ->notEmptyFile('mobile_image');

        return $validator;
    }
}
