import { useBlockProps, MediaUpload } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	SelectControl,
	CheckboxControl,
	Button,
} from '@wordpress/components'

import img from './assets/image.png'
import mImg from './assets/image-mobile.png'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { title, content, image, mImage, appstore, googleplay } = attributes

	return (
		<div {...useBlockProps()}>
			<div className="text-image-slider-editor">
				<Placeholder label={'Text Image Slider'}>
					<div className="row">
						<TextControl
							label="Title"
							value={title}
							className="input"
							onChange={(value) => setAttributes({ title: value })}
						/>
					</div>
					<div className="row">
						<TextareaControl
							label="Content"
							value={content}
							className="input"
							onChange={(value) => setAttributes({ content: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="AppStore Link"
							value={appstore}
							className="input"
							onChange={(value) => setAttributes({ appstore: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="GooglePlay Link"
							value={googleplay}
							className="input"
							onChange={(value) => setAttributes({ googleplay: value })}
						/>
					</div>
					<div className="row">
						<BaseControl label="Image">
							<MediaUpload
								onSelect={(value) => setAttributes({ image: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{image === 'image.png' ? (
											<img src={img} alt={'image'} />
										) : image && image.url ? (
											<img src={image.url} alt={image.alt} />
										) : (
											'Insert'
										)}
									</Button>
								)}
							/>
							<Button
								icon="dismiss"
								showTooltip="true"
								label="Delete image"
								className="delete-button"
								onClick={() => setAttributes({ image: '' })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() => setAttributes({ image: 'image.png' })}
							/>
						</BaseControl>
						<BaseControl label="Mobile image">
							<MediaUpload
								onSelect={(value) => setAttributes({ mImage: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{mImage === 'image-mobile.png' ? (
											<img src={mImg} alt={'image'} />
										) : mImage && mImage.url ? (
											<img src={mImage.url} alt={mImage.alt} />
										) : (
											'Insert'
										)}
									</Button>
								)}
							/>
							<Button
								icon="dismiss"
								showTooltip="true"
								label="Delete image"
								className="delete-button"
								onClick={() => setAttributes({ mImage: '' })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() => setAttributes({ mImage: 'image-mobile.png' })}
							/>
						</BaseControl>
					</div>
				</Placeholder>
			</div>
		</div>
	)
}
