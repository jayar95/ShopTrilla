<?php
	namespace App\Util;

	use Doctrine\Common\Collections\ArrayCollection;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Http\UploadedFile;
	use Illuminate\Support\Facades\Validator;

	class PhotoUploader {
		/**
		 * @param array $photos
		 * @param Model $model
		 * @param array $relation
		 *
		 * @return ArrayCollection
		 */
		public function process(array $photos, Model $model, array $relation) {
			$validationRules = [
				'photo' => 'required|mimes:png,jpeg|max:2000',
			];

			$uploaded = new ArrayCollection();

			$filePath = strtolower(get_class($model));
			$filePath = 'public/images/' . str_replace('photo', '', $filePath);

			/** @var UploadedFile $photo */
			foreach ($photos as $photo) {
				$validator = Validator::make([
					'photo' => $photo,
				], $validationRules);

				if ($validator->passes()) {
					$photo->store($filePath, 'public');

					$relation = array_merge($relation, [
						'filepath' => $photo,
					]);

					$uploaded->add($model::create($relation)->save());
				}
			}

			return $uploaded;
		}
	}