import { useBlockProps } from '@wordpress/block-editor'

import img from './assets/image.png'
import mImg from './assets/image-mobile.png'
import icon from './assets/icon.svg'
import app from './assets/appstore.png'
import google from './assets/googleplay.png'

export default function save({ attributes }) {
	const { title, content, image, mImage, googleplay, appstore } = attributes

	return (
		<section {...useBlockProps.save()}>
			<div className="text-image-slider">
				<div className="container">
					<div className="text-image-slider__inner">
						{image && (
							<div className={`text-image-slider__image${mImage ? ' only-desktop' : ''}`}>
								{image === 'image.png' ? (
									<img src={img} alt={'image'} />
								) : image.url ? (
									<img src={image.url} alt={image.alt} />
								) : (
									''
								)}
							</div>
						)}
						{mImage && (
							<div className="text-image-slider__image only-mobile">
								{mImage === 'image-mobile.png' ? (
									<img src={mImg} alt={'image'} />
								) : mImage.url ? (
									<img src={mImage.url} alt={mImage.alt} />
								) : (
									''
								)}
							</div>
						)}
						{(title || content) && (
							<div className="text-image-slider__text">
								<div className="text-image-slider__icon">
									<img src={icon} alt={'icon'} />
								</div>
								{title && (
									<h2 className="text-image-slider__title" dangerouslySetInnerHTML={{ __html: title }}></h2>
								)}
								{content && (
									<div className="text-image-slider__content" dangerouslySetInnerHTML={{ __html: content }} />
								)}
								<div className="text-image-slider__buttons">
									<a href={appstore} className="text-image-slider__appstore">
										<img src={app} alt={'appstore'} />
									</a>
									<a href={googleplay} className="text-image-slider__googleplay">
										<img src={google} alt={'googleplay'} />
									</a>
								</div>
							</div>
						)}
					</div>
				</div>
			</div>
		</section>
	)
}
