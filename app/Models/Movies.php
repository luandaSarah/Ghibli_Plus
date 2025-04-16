<?php

namespace App\Models;


class Movies extends Model
{
    public function __construct(
        protected ?int $id = null,
        protected ?string $title = null,
        protected ?string $description = null,
        protected ?string $coverURL = null,
        protected ?string $videoURL = null,
        protected ?string $director_id = null,
        protected ?\DateTime $release_date = null

    ) {
        $this->table = "movies";
    }

        /**
         * Get the value of id
         *
         * @return ?int
         */
        public function getId(): ?int
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @param ?int $id
         *
         * @return self
         */
        public function setId(?int $id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of title
         *
         * @return ?string
         */
        public function getTitle(): ?string
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @param ?string $title
         *
         * @return self
         */
        public function setTitle(?string $title): self
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of description
         *
         * @return ?string
         */
        public function getDescription(): ?string
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @param ?string $description
         *
         * @return self
         */
        public function setDescription(?string $description): self
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of coverURL
         *
         * @return ?string
         */
        public function getCoverURL(): ?string
        {
                return $this->coverURL;
        }

        /**
         * Set the value of coverURL
         *
         * @param ?string $coverURL
         *
         * @return self
         */
        public function setCoverURL(?string $coverURL): self
        {
                $this->coverURL = $coverURL;

                return $this;
        }

        /**
         * Get the value of videoURL
         *
         * @return ?string
         */
        public function getVideoURL(): ?string
        {
                return $this->videoURL;
        }

        /**
         * Set the value of videoURL
         *
         * @param ?string $videoURL
         *
         * @return self
         */
        public function setVideoURL(?string $videoURL): self
        {
                $this->videoURL = $videoURL;

                return $this;
        }

        /**
         * Get the value of director_id
         *
         * @return ?string
         */
        public function getDirectorId(): ?string
        {
                return $this->director_id;
        }

        /**
         * Set the value of director_id
         *
         * @param ?string $director_id
         *
         * @return self
         */
        public function setDirectorId(?string $director_id): self
        {
                $this->director_id = $director_id;

                return $this;
        }

        /**
         * Get the value of release_date
         *
         * @return ?\DateTime
         */
        public function getReleaseDate(): ?\DateTime
        {
                return $this->release_date;
        }

        /**
         * Set the value of release_date
         *
         * @param ?\DateTime $release_date
         *
         * @return self
         */
        public function setReleaseDate(?\DateTime $release_date): self
        {
                $this->release_date = $release_date;

                return $this;
        }
}
